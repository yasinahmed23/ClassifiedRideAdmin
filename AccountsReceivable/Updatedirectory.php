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

	$directoryrequest=$_POST['directory'];
	$DealerName=$_POST['DealerName'] ;

	if ($directoryrequest=="Turn On") {
		DirectoryOn($connector);
	}
	else if ($directoryrequest=="Turn Off") {
		DirectoryOFF($connector);
	}	

	//Reload Page For User
	getDealerPage($connector);	
?>
