<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'db_config2.php';
	
	// create variables out of user input
	$email=$_POST['email'];

	// Protect MySQL injection
	$email = stripslashes($email);
	$email = mysql_real_escape_string($email);

	//Run query - select user from database	
	$sel_user="
		SELECT * 
		FROM employees 
		WHERE EmplEmail='$email'
	";
	$result=mysql_query($sel_user); 

	// Count # of rows returned by query
	$count=mysql_num_rows($result);

	//If only one row was returned...
	if ($count==1) {
		//Create session variable from data and redirect page
			$TempPass=rand();
			//echo $TempPass;
		
		//SEND NEW HIRE NOTIFICATION VIA EMAIL
		$to = $email;
		$subject = "Password Reset Request";
		$message = "Your Temporary password is " . $TempPass . ". Please change it right away";
		$from = "classifiedridewebsite@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers); 

		
		//OVERWRITE OLD PASSWORD IN DATABASE WITH TEMP PASSWORD
		// create variables out of user input
		
		$TempPass = hash( 'sha256', $TempPass );	
	
		mysql_query("UPDATE employees SET EmplPassword='".$TempPass."'
		WHERE EmplEmail='$email'
		");
		header( 'Location: /index.php' ) ;
	} else {	
		header( 'Location: /ResetEmplPassError.php' ) ;
	} 
?>
