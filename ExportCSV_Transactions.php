<?php
	//Enable Session Variables	
	session_start();
	$user = $_SESSION['user'];

	//Connect to Database	
	require_once 'includes/db_config2.php';


//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM transactions 
	ORDER BY TransactionID DESC
");

// these are the content type headers to send in php that
// 1) force the type to be CSV
header("Content-type: application/csv");
// 2) force the link to send something for download
header("Content-Disposition: attachment; filename=Transactions.csv");
// 3) attempt to prevent caching
header("Pragma: no-cache");
header("Expires: 0"); 

while ($row = mysql_fetch_array($sql)) 
{
$TransactionDate = $row['TransactionDate'];
$TransactionID = $row['TransactionID'];
$eID = $row['eID'];
$employee = ($row['employee']);
$DealerID = $row['DealerID'];
$DealerName = $row['DealerName'];
$member = $row['member'];
$registered = $row['registered'];
$EmplReferral = $row['EmplReferral'];
$Renewed = $row['Renewed'];
$Commission = $row['Commission'];
$ReferralAmount = $row['ReferralAmount'];

//Disply data from database into a table -->
	echo $TransactionDate . ',';
	echo $TransactionID . ',';
	echo $DealerName . ',';
	echo $employee . ',';
	echo $Commission . ',';
	echo $EmplReferral . ',';
	echo $ReferralAmount;
	echo "\r\n";
} 
?>
