<?php
	//Enable Session Variables	
	session_start();	

	//Connect to Database	
	include 'db_config.php';

	//Save user input as variable	
	$employee = $_POST['search_string'];
	
	$AdminUsername = stripslashes($_POST['AdminUsername']);
	$AdminPass = stripslashes($_POST['AdminPass']);

	$AdminUsername = mysql_real_escape_string($_POST['AdminUsername']);
	$AdminPass = mysql_real_escape_string($_POST['AdminPass']);
		
	$AdminPass = hash( 'sha256', $AdminPass );

	//Get Email Address of New Admin from name
		$GetEmployeeEmail = mysql_query("
			SELECT EmplEmail
			FROM  employees
			WHERE employee='$employee'");

		while ($row = mysql_fetch_array($GetEmployeeEmail)) {
			$EmplEmail = $row['EmplEmail'];
		}

	//Run query to Add user to database	
	$addMember = "
	INSERT INTO members (employee, username, email, password)
	VALUES ('$employee', '$AdminUsername', '$EmplEmail', '$AdminPass')";

	$result= mysql_query($addMember);
	if (!$result) {
    		die('Invalid query');
		}
	
	//SEND NOTIFICATION
		$to = "stephmcglathery@gmail.com"; 
		$subject = "Admin User Added!";
		$message = 
		$employee . " was given Admin Rights";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
	
	header( 'Location: /index.php' ) ;
?>

	

