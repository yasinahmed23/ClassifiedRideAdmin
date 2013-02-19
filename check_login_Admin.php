<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	require_once'Functions/AdminFunctions.php';
	
	// create variables out of user input
	$UserName=$_POST['UserName']; 
	$Password=$_POST['Password'];

	// Protect MySQL injection
	$UserName = stripslashes($UserName);
	$Password = stripslashes($Password);
	$UserName = mysql_real_escape_string($UserName);
	$Password = mysql_real_escape_string($Password);

	$Password= hash( 'sha256', $Password );	
	
	//Run query - select user from database	
	$sel_user="SELECT * FROM members WHERE username='$UserName' and password='$Password'";
	$result=mysql_query($sel_user); 
	
	// Count # of rows returned by query
	$count=mysql_num_rows($result);

	//If only one row was returned...
	if ($count==1) {
	
	//Create session variable from data 
	$_SESSION['admin']=$UserName;

	//Update Database with User's IP address and timestamp
	$setIP = mysql_query("
		UPDATE members 
		SET LastLoginLocation='".$ip."'
		WHERE username='".$UserName."'");

	//Update Database with TimeStamp of last login
	$setLoginTime = mysql_query("
		UPDATE members 
		SET LastLogin='".$date."'
		WHERE username='".$UserName."'");

	//Redirect Page
	header( 'Location: /AdminDashboard.php' ) ;
	}
	else {
		header( 'Location: index.php' ) ;
	}

?>
