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

	$YouTuberequest=$_POST['YouTube'];
	$DealerName=$_POST['DealerName'] ;

	if ($YouTuberequest=="Turn On") {
	$UpdateYouTube=mysql_query("
		UPDATE dealers 
		SET YouTube='YouTubeON'
		WHERE DealerName='$DealerName'");

	$GetPmt=mysql_query("
		SELECT MthlyPmt 
		FROM  dealers
		WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		$MthlyPmt=$MthlyPmt+199;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}
	else if ($YouTuberequest=="Turn Off") {
		$UpdateYouTube=mysql_query("
			UPDATE dealers 
			SET YouTube='YouTubeDeclined'	
			WHERE DealerName='$DealerName'");

		$GetPmt=mysql_query("
			SELECT MthlyPmt 
			FROM  dealers
			WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}

		//UPDATE MONTHLY PAYMENT
	
		$MthlyPmt=$MthlyPmt-199;

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
