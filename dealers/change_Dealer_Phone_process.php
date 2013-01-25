<?php
	//Enable Session Variables	
	session_start();
	$DealerUser = $_SESSION['DealerUser'];

	//Connect to Database	
	include '../includes/db_configDealers.php';
	
	
	// create variables out of user input
	$phone1=$_POST['phone1'];
	$phone2=$_POST['phone2'];
	$phone3=$_POST['phone3'];



	// Protect MySQL injection
	$phone1 = stripslashes($phone1);
	$phone1 = mysql_real_escape_string($phone1);

	$phone2 = stripslashes($phone2);
	$phone2 = mysql_real_escape_string($phone2);

	$phone3 = stripslashes($phone3);
	$phone3 = mysql_real_escape_string($phone3);
	
	mysql_query("UPDATE dealers SET DealerCellPhone1='".$phone1."'
WHERE DealerUserName='".$DealerUser."'");

	mysql_query("UPDATE dealers SET DealerCellPhone2='".$phone2."'
WHERE DealerUserName='".$DealerUser."'");
	
	mysql_query("UPDATE dealers SET DealerCellPhone3='".$phone3."'
WHERE DealerUserName='".$DealerUser."'");	
	
	header( 'Location: ../edit_DealerProfile.php' ) ;
	
?>
