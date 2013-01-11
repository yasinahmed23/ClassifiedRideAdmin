<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'db_config.php';
	
	$user = $_SESSION['user'];
	
	// create variables out of user input
	$password=$_POST['password1'];

	// Protect MySQL injection
	$password = stripslashes($password);
	$password = mysql_real_escape_string($password);
	$password = hash( 'sha256', $password );	
	
	
	mysql_query("UPDATE employees SET EmplPassword='".$password."'
WHERE EmplUserName='".$user."'");
	
	header( 'Location: /index.php' ) ;
	

?>
