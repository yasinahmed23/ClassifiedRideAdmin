<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once '../includes/db_config.php';
	require_once '../Functions/ARFunctions.php';
	require_once '../Functions/dbConnector.php';
	
	$Cabidrequest=$_POST['CaBID'];
	$DealerName=$_POST['DealerName'] ;

	if ($Cabidrequest=="Turn On") {
		CabidOn($connector);
	}
	else if ($Cabidrequest=="Turn Off") {
		CabidOff($connector);								
	}	
	
	//Reload Page For User
	getDealerPage($connector);
?>
