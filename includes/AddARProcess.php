<?php
	//Enable Session Variables	
	session_start();	

	//Connect to Database	
	include 'db_config.php';

	//Save user input as variable	
	$employee = $_POST['search_string'];
	
	$ARUsername = stripslashes($_POST['ARUsername']);
	$ARPass = stripslashes($_POST['ARPass']);

	$ARUsername = mysql_real_escape_string($_POST['ARUsername']);
	$ARPass = mysql_real_escape_string($_POST['ARPass']);
		
	$ARPass = hash( 'sha256', $ARPass );

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
	INSERT INTO AccountsReceivable (ARemployee, ARusername, EmplEmail, ARpassword)
	VALUES ('$employee', '$ARUsername', '$EmplEmail', '$ARPass')";

	$result= mysql_query($addMember);
	if (!$result) {
    		die('Invalid query');
		}
	
	//SEND NOTIFICATION
		$to = "stephmcglathery@gmail.com"; 
		$subject = "AR User Added!";
		$message = 
		$employee . " was given Admin Rights";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
	
	header( 'Location: /index.php' ) ;
?>

	

