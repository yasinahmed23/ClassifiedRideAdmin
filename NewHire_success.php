<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	
	$username=$_SESSION['user'];
	$password=$_SESSION['pass'];
	
	//Run query - select user from database	
	$sel_user="SELECT * FROM members WHERE username='$username' and password='$password'";
	$result=mysql_query($sel_user); 
	
	// Count # of rows returned by query
	$count=mysql_num_rows($result);

	//If only one row was returned...
	if ($count==1) {
	
	header( 'Location: employees.php' ) ;
	}
	else {
		header( 'Location: login_error.php' ) ;
	}
?>
