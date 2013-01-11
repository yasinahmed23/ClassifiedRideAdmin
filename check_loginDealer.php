<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	
	// create variables out of user input
	$DealerUserName=$_POST['DealerUserName']; 
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
	
	//Create session variable from data and redirect page
	$_SESSION['DealerUser']=$DealerUserName;	
	header( 'Location: Dealers.php' ) ;
	}
	else {
		header( 'Location: login_errorDealer.php' ) ;
	}

?>
