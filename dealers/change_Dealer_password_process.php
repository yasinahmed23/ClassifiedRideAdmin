<?php
	//Enable Session Variables	
	session_start();
	$DealerUser = $_SESSION['DealerUser'];

	//Connect to Database	
	include '../includes/db_configDealers.php';
	
	
	// create variables out of user input
	$DealerPassword=$_POST['password1'];

	// Protect MySQL injection
	$DealerPassword = stripslashes($DealerPassword);
	$DealerPassword = mysql_real_escape_string($DealerPassword);
	$DealerPassword = hash( 'sha256', $DealerPassword  );
	
	mysql_query("
		UPDATE dealers SET DealerPassword='".$DealerPassword."'
		WHERE DealerUserName='".$DealerUser."'");
	
	header( 'Location: ../edit_DealerProfile.php' ) ;
	

?>
