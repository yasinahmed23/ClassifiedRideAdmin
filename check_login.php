<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	require_once'Functions/Functions.php';

	// create variables out of user input
	$EmplUserName=$_POST['EmplUName']; 
	$EmplPassword=$_POST['EmplPassword'];

	// Protect MySQL injection
	$EmplUserName = stripslashes($EmplUserName);
	$EmplUserName = mysql_real_escape_string($EmplUserName);
	
	$EmplPassword = stripslashes($EmplPassword);	
	$EmplPassword = mysql_real_escape_string($EmplPassword);
	$EmplPassword= hash( 'sha256', $EmplPassword );	
	
	//Run query - select user from database	
	$sel_user="SELECT * FROM employees WHERE EmplUserName='$EmplUserName' and EmplPassword='$EmplPassword'";
	$result=mysql_query($sel_user); 
	
	// Count # of rows returned by query
	$count=mysql_num_rows($result);

	//If only one row was returned...
	if ($count==1) {
	
	//Create session variable from data
	$_SESSION['user']=$EmplUserName;	

	//Update Database with User's IP address and timestamp
	$setIP = mysql_query("
		UPDATE employees 
		SET LastLoginLocation='".$ip."'
		WHERE EmplUserName='".$EmplUserName."'");

	//Update Database with TimeStamp of last login
	$setLoginTime = mysql_query("
		UPDATE employees 
		SET LastLogin='".$date."'
		WHERE EmplUserName='".$EmplUserName."'");

	//Redirect Page
	header( 'Location: MyDealerships.php' ) ;
	}
	else {
		header( 'Location: login_error.php' ) ;
	}
?>
