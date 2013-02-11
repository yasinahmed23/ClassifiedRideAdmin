<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once '../includes/db_config.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

	$Cabidrequest=$_POST['CaBID'];
	$DealerName=$_POST['DealerName'] ;

	if ($Cabidrequest=="Turn On") {
	$UpdateCabid=mysql_query("
		UPDATE dealers 
		SET CaBID='CaBIDON	'
		WHERE DealerName='$DealerName'");

	$GetPmt=mysql_query("
		SELECT MthlyPmt 
		FROM  dealers
		WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		$MthlyPmt=$MthlyPmt+399;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}
	else if ($Cabidrequest=="Turn Off") {
		$UpdateCabid=mysql_query("
			UPDATE dealers 
			SET CaBID='CaBIDDeclined'	
			WHERE DealerName='$DealerName'");

		$GetPmt=mysql_query("
			SELECT MthlyPmt 
			FROM  dealers
			WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		//UPDATE MONTHLY PAYMENT
		$MthlyPmt=$MthlyPmt-399;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
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
