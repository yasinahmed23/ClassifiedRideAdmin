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

	$DealerName=$_POST['DealerName'];
	$date=$_POST['date'];

	$SetDueDate= "
		UPDATE dealers 
		SET StartDate='$date'
		WHERE DealerName='$DealerName'";

	$result=mysql_query($SetDueDate);

	if (!$result) {
    		die('Could Not Set Start Date');
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
