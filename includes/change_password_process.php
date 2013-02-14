<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include("../Functions/dbConnector.php");
	$connector = new DbConnector();
	
	$user = $_SESSION['user'];
	
	// create variables out of user input
	$password=$_POST['password1'];

	// Protect MySQL injection
	$password = stripslashes($password);
	$password = mysql_real_escape_string($password);
	$password = hash( 'sha256', $password );	
	
	$ChangeEmplPass = "UPDATE employees SET EmplPassword='".$password."'
WHERE EmplUserName='".$user."'";

	$result = $connector->query($ChangeEmplPass);
	if (!$result) {
    		die('There was an error- Please go back and try again.  We have been notified of this error');
		}
	
	header( 'Location: /index.php' ) ;
	

?>
