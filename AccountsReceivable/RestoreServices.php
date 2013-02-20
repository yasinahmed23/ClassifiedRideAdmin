<?php
	function RestoreAllFeatures($connector) {

		//Enable Session Variables	
		session_start();
	
		if (!isset($_SESSION[user])) {
		header("location: index.php");
		}
	
		//Connect to Database	
		require_once '../includes/db_config.php';
		require_once '../Functions/ARFunctions.php';
		require_once '../Functions/dbConnector.php';

		//Set Restore Date
		//dealerRestoreDate($connector);
			
		//Turn Features Off
		SMSOn($connector);
		CabidOn($connector);
		YouTubeOn($connector);
		FaceBookOn($connector);
		DirectoryOn($connector);		

		//Reload Page
		getDealerPage($connector);
	}
	
	RestoreAllFeatures($connector);
?>
