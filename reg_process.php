<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	
	//Save user input as variable	
	$firstname = mysql_real_escape_string($_POST['firstname']);
	$lastname = mysql_real_escape_string($_POST['lastname']);
	$username = mysql_real_escape_string($_POST['username']);	
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password1']);
		
	//Run query to Add user to database	
	$add_user = "
	INSERT INTO members (firstname,lastname,username,email, password)
	VALUES ('$firstname','$lastname','$username','$email','$password')
	";
	
	$result= mysql_query($add_user);
	//Create session variable from data and redirect page
	$_SESSION['user']=$username;
	$_SESSION['pass']=$password;	
	header( 'Location: reg_success.php' ) ;
	

	
