<?php
//Connect to Database	
require_once 'includes/db_config.php';
require_once 'Functions/ARFunctions.php';
require_once 'Functions/dbConnector.php';

//Get Status of Directory Feature
function GetDirectoryStatus($connector) {
	$connector = new DbConnector();
	if (!$connector) {
			die('Could not connect');
		}

	//$DealerName= $_POST['search_string'];
	$DealerName= "My Dealership";
	$SelectStatus = "SELECT directory FROM dealers WHERE DealerName='".$DealerName."'";
	$GetStatus = $connector->query($SelectStatus);

	while ($row = mysql_fetch_array($GetStatus)) {
  		$directory = $row[0];
	if ($directory=="directoryON") {
		echo "Already on";
	}
	else {
		echo "Already off";
	}
	mysql_close();
	}
}
GetDirectoryStatus($connector);
?>
