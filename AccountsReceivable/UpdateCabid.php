<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once '../includes/db_config.php';
	require_once '../Functions/ARFunctions.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

	$Cabidrequest=$_POST['CaBID'];
	$DealerName=$_POST['DealerName'] ;

	if ($Cabidrequest=="Turn On") {
		TurnCabidOn();
	}
	else if ($Cabidrequest=="Turn Off") {
		TurnCabidOff();
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
