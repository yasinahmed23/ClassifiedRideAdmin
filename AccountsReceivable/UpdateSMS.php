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

	$SMSrequest=$_POST['SMS'];
	$DealerName=$_POST['DealerName'] ;

	if ($SMSrequest=="Turn On") {
		SMSOn($connector);		
	}
	else if ($SMSrequest=="Turn Off") {
		SMSOff($connector);
	}

	//Reload Page
	getDealerPage($connector);
?>
