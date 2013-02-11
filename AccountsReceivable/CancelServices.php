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

	$DealerName=$_POST['DealerName'] ;

	date_default_timezone_set('America/Chicago');
	$date = date('m/d/Y h:i:s a', time());

	//Set Dealer Status to Inactive
	$SetDealerInactive=mysql_query("
		UPDATE  dealers 
		SET MemberStatus=INACTIVE		'
		WHERE DealerName='$DealerName'");

	//Set Payment to Zero
	$SetDealerPmtZero=mysql_query("
		UPDATE  dealers 
		SET MthlyPmt=0
		WHERE DealerName='$DealerName'");$DealerName

	//Create  a timestamp for cancellation request
	$SetCancelledDate=mysql_query("
		UPDATE  dealers 
		SET Cancelled='$date'
		WHERE DealerName='$DealerName'");

	//Turn All Features Of




		
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
