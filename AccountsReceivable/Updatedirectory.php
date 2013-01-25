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

	$directoryrequest=$_POST['directory'];
	$DealerName=$_POST['DealerName'] ;

	if ($directoryrequest=="Turn On") {
	$Updatedirectory=mysql_query("
		UPDATE dealers 
		SET directory='directoryON'
		WHERE DealerName='$DealerName'");

	$GetPmt=mysql_query("
		SELECT MthlyPmt 
		FROM  dealers
		WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		$MthlyPmt=$MthlyPmt+99;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}
	else if ($directoryrequest=="Turn Off") {
		$Updatedirectory=mysql_query("
			UPDATE dealers 
			SET directory='DirectoryDeclined'	
			WHERE DealerName='$DealerName'");

		$GetPmt=mysql_query("
			SELECT MthlyPmt 
			FROM  dealers
			WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		$MthlyPmt=$MthlyPmt-99;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}	
		header( 'Location: /AccountsReceivable/index.php' ) ;	
?>
