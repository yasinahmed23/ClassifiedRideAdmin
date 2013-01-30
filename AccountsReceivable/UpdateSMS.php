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

	$SMSrequest=$_POST['SMS'];
	$DealerName=$_POST['DealerName'] ;

	if ($SMSrequest=="Turn On") {
	$UpdateSMS=mysql_query("
		UPDATE dealers 
		SET SMS='SMSON'
		WHERE DealerName='$DealerName'");

		$GetPmt=mysql_query("
			SELECT MthlyPmt 
			FROM  dealers
			WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		$MthlyPmt=$MthlyPmt+990;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}
	else if ($SMSrequest=="Turn Off") {
		$UpdateSMS=mysql_query("
			UPDATE dealers 
			SET SMS='SMSDeclined'
			WHERE DealerName='$DealerName'");

		$GetPmt=mysql_query("
			SELECT MthlyPmt 
			FROM  dealers
			WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		//UPDATE MONTHLY PAYMENT
		$MthlyPmt=$MthlyPmt-990;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}
	header( 'Location: /AccountsReceivable/index.php' ) ;	
?>
