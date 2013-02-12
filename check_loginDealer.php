<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	require_once'Functions/Functions.php';
	
	// create variables out of user input
	$DealerUserName=$_POST['DealerUName']; 
	$DealerPassword=$_POST['DealerPassword'];

	// Protect MySQL injection
	$DealerUserName = stripslashes($DealerUserName);
	$DealerPassword = stripslashes($DealerPassword);
	$DealerUserName = mysql_real_escape_string($DealerUserName);
	$DealerPassword = mysql_real_escape_string($DealerPassword);
	
	$DealerPassword = hash( 'sha256', $DealerPassword );
	
	//Run query - select user from database	
	$sel_user="SELECT * FROM dealers WHERE DealerUserName='$DealerUserName' and DealerPassword='$DealerPassword'";
	$result=mysql_query($sel_user); 
	
	// Count # of rows returned by query
	$count=mysql_num_rows($result);

	//If only one row was returned...
	if ($count==1) {
	
	//Create session variable from data 
	$_SESSION['DealerUser']=$DealerUserName;

	//Update Database with User's IP address and timestamp
	$ip=$_SERVER['REMOTE_ADDR'];
	$setIP = mysql_query("
		UPDATE dealers 
		SET LastLoginLocation='".$ip."'
		WHERE DealerUserName='".$DealerUserName."'");

	//Update Database with TimeStamp of last login
	$setLoginTime = mysql_query("
		UPDATE dealers
		SET LastLogin='".$date."'
		WHERE DealerUserName='".$DealerUserName."'");

	//Redirect Page	
	header( 'Location: Dealers.php' ) ;
	}
	else {
		header( 'Location: login_errorDealer.php' ) ;
	}

?>
