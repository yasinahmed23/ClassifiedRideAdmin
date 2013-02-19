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

	$YouTuberequest=$_POST['YouTube'];
	$DealerName=$_POST['DealerName'] ;

	if ($YouTuberequest=="Turn On") {
		YouTubeOn($connector);
	}
	else if ($YouTuberequest=="Turn Off") {
		YouTubeOFF($connector);
	}
	
	//Reload Page For User
	getDealerPage($connector);
?>
