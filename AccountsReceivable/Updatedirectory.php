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
		Directory($connector);
	}
	else if ($directoryrequest=="Turn Off") {
		DirectoryOFF($connector);
	}	
		$GetDealerID = mysql_query("
		SELECT DealerID
		FROM dealers
		WHERE DealerName='$DealerName'");

	while ($row = mysql_fetch_array($GetDealerID)) 
	{
	$DealerID = $row['DealerID'];
	}
	header("location: ViewDealer.php?id=$DealerID");	
?>
