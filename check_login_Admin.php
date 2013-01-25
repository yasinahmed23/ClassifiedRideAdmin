<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	
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
	
	//Create session variable from data and redirect page
	$_SESSION['admin']=$UserName;

	header( 'Location: Referrals.php' ) ;
	}
	else {
		header( 'Location: index.php' ) ;
	}

?>
