<?php
	//Enable Session Variables	
	session_start();
	$DealerUser = $_SESSION['DealerUser'];

	//Connect to Database	
	include '../includes/db_configDealers.php';
	
	
	// create variables out of user input
	$contact1=$_POST['contact1'];
	$contact2=$_POST['contact2'];



	// Protect MySQL injection
	$contact1 = stripslashes($contact1);
	$contact1 = mysql_real_escape_string($contact1);

	$contact2 = stripslashes($contact2);
	$contact2 = mysql_real_escape_string($contact2);
	
	mysql_query("UPDATE dealers SET DealerMainContactFirst='".$contact1."'
WHERE DealerUserName='".$DealerUser."'");

	mysql_query("UPDATE dealers SET DealerMainContactLast='".$contact2."'
WHERE DealerUserName='".$DealerUser."'");
	
	header( 'Location: ../edit_DealerProfile.php' ) ;
	

?>
