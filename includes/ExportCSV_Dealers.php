<?php
	//Enable Session Variables	
	session_start();

	//Connect to Database	
	require_once '../includes/db_config2.php';
	require_once '../Functions/Functions.php';


//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM dealers 
	ORDER BY DealerID DESC
");

// these are the content type headers to send in php that
// 1) force the type to be CSV
header("Content-type: application/csv");
// 2) force the link to send something for download
header("Content-Disposition: attachment; filename=AllDealers.csv");
// 3) attempt to prevent caching
header("Pragma: no-cache");
header("Expires: 0"); 

while ($row = mysql_fetch_array($sql)) 
{
$DealerID = $row['DealerID'];
$TimeRegistered = $row['TimeRegistered'];
$DealerName = $row['DealerName'];
$DealerCity = ($row['DealerCity']);
$DealerState = $row['DealerState'];
$DealerState = $row['DealerState'];
$DealerZip = $row['DealerZip'];
$DealerCountry = $row['DealerCountry'];
$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
$RepName = $row['RepName'];
$Program = $row['Program'];
$Program = $row['Program'];
$MemberStatus = $row['MemberStatus'];
$MthlyPmt = $row['MthlyPmt'];

//Disply data from database into a table -->
	echo $DealerName . ',';
	echo $DealerCity . ',';
	echo $DealerState . ',';
	echo $DealerZip . ',';
	echo $DealerCountry . ',';
	echo $DealerContact . ',';
	echo $DealerEmail . ',';
	echo $DealerContactPhone . ',';
	echo $RepName . ',';
	echo $Program . ',';
	echo $MthlyPmt . ',';
	echo $MemberStatus ;	
	echo "\r\n";
} 
?>



