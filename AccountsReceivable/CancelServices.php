<?php
	function CancelAllFeatures($connector) {

		//Enable Session Variables	
		session_start();
	
		if (!isset($_SESSION[user])) {
		header("location: index.php");
		}
	
		//Connect to Database	
		require_once '../includes/db_config.php';
		require_once '../Functions/ARFunctions.php';
		require_once '../Functions/dbConnector.php';

		//Set Dealer Status to Inactive
		//dealerInactive($connector);

		//Set Cancelled Date
		//dealerCancelDate($connector);
	
		//Turn Features Off
		SMSOff($connector);
		CabidOff($connector);
		YouTubeOFF($connector);
		FaceBookOFF($connector);

		DirectoryOFF($connector);		

		//Reload Page For User
		getDealerPage($connector);
	}
	
	CancelAllFeatures($connector);
?>
