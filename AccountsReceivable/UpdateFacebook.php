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

	$facebookrequest=$_POST['facebook'];
	$DealerName=$_POST['DealerName'] ;

	if ($facebookrequest=="Turn On") {
	$Updatefacebook=mysql_query("
		UPDATE dealers 
		SET facebook='facebookON'
		WHERE DealerName='$DealerName'");

	$GetPmt=mysql_query("
		SELECT MthlyPmt 
		FROM  dealers
		WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		$MthlyPmt=$MthlyPmt+1490;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}
	else if ($facebookrequest=="Turn Off") {
		$Updatefacebook=mysql_query("
			UPDATE dealers 
			SET facebook='FacebookDeclined'	
			WHERE DealerName='$DealerName'");

		$GetPmt=mysql_query("
			SELECT MthlyPmt 
			FROM  dealers
			WHERE DealerName='$DealerName'");
	
		while ($row = mysql_fetch_array($GetPmt)) {
			$MthlyPmt = $row['MthlyPmt'];
		}
	
		$MthlyPmt=$MthlyPmt-1490;

		$UpdatePmt=mysql_query("
			UPDATE dealers 
			SET MthlyPmt=$MthlyPmt
			WHERE DealerName='$DealerName'");
	}	
		header( 'Location: /AccountsReceivable/index.php' ) ;	
?>
