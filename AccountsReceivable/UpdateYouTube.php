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
	
	//Go back to View Dealer
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
