<?php
	//Enable Session Variables	
	session_start();
	$user = $_SESSION['user'];

	//Connect to Database	
	require_once 'includes/db_config2.php';


	//Get Employee ID from Username
	$GetEmployeeID = mysql_query("
		SELECT employeeID
		FROM  employees
		WHERE EmplUserName='$user'
	");

	while ($row = mysql_fetch_array($GetEmployeeID)) 
	{
		$employeeID = $row['employeeID'];
	}

	$sql = mysql_query("
		SELECT *
		FROM  transactions	
		WHERE eID='".$employeeID."'

	");

	// these are the content type headers to send in php that
	// 1) force the type to be CSV
	header("Content-type: application/csv");
	// 2) force the link to send something for download
	header("Content-Disposition: attachment; filename=MyTransactions.csv");
	// 3) attempt to prevent caching
	header("Pragma: no-cache");
	header("Expires: 0"); 
	while ($row = mysql_fetch_array($sql)) 
	{
		$TransactionDate = $row['TransactionDate'];
		$TransactionID = $row['TransactionID'];
		$DealerName = $row['DealerName'];
		$EmplReferral = $row['EmplReferral'];
		$Commission = $row['Commission'];
			
		echo $TransactionDate. ',';
		echo $TransactionID. ',';	
		echo $DealerName. ',';
		if (empty($Commission)) {
			echo "";
		} else {
			echo "$" . $Commission. ',';
		}			
		if (empty($EmplReferral)) {
			echo "";
		} else {
			echo $EmplReferral. ',';
		}	 
		echo "\r\n";
	 } ?>
