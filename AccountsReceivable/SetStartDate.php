<?php
	//Enable Session Variables	
	session_start();
	
	//Include Required Files	
	require_once '../includes/db_config.php';
	require_once '../Functions/ARFunctions.php';
	require_once '../Functions/dbConnector.php';

	//Add Note
	setStartDate($connector);

	//Redirect Page
	getDealerPage($connector);
?>
