<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';
	require_once 'Functions/ARFunctions.php';
	require_once 'Functions/dbConnector.php';
	
	//$DealerName=$_POST['DealerName'] ;
	$DealerName="My Dealership";

	CabidOff($connector);;
	
	$GetDealerID = mysql_query("
	SELECT DealerID
	FROM dealers
	WHERE DealerName='$DealerName'");

	while ($row = mysql_fetch_array($GetDealerID)) 
	{
		$DealerID = $row['DealerID'];
	}
	//header("location: ViewDealer.php?id=$DealerID");
?>
