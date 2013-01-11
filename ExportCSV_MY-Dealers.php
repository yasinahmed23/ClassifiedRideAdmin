<?php
	//Enable Session Variables	
	session_start();
	$user = $_SESSION['user'];

	//Connect to Database	
	require_once 'includes/db_config2.php';

//Get Employee ID from Username
$GetEmployee = mysql_query("
	SELECT employee
	FROM  employees
	WHERE EmplUserName='$user'
");

while ($row = mysql_fetch_array($GetEmployee)) 
{
	$employee = $row['employee'];
}


//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM dealers
	WHERE RepName='$employee' 
	ORDER BY DealerID DESC
");

// these are the content type headers to send in php that
// 1) force the type to be CSV
header("Content-type: application/csv");
// 2) force the link to send something for download
header("Content-Disposition: attachment; filename=MY_Dealers.csv");
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
$DealerEmail = $row['DealerEmail'];
$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
$RepName = $row['RepName'];

//Disply data from database into a table -->
	echo $DealerName . ',';
	echo $DealerCity . ',';
	echo $DealerState . ',';
	echo $DealerEmail . ',';
	echo $RepName ;	
	echo "\r\n";
} 
?>



