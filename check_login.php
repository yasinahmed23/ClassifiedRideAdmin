<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	
	// create variables out of user input
	$EmplUserName=$_POST['EmplUserName']; 
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
	
	//Create session variable from data and redirect page
	$_SESSION['user']=$EmplUserName;	
	header( 'Location: MyDealerships.php' ) ;
	}
	else {
		header( 'Location: login_error.php' ) ;
	}

?>
