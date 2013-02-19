<?php
	//Enable Session Variables	
	session_start();

	//Connect to Database	
	require_once '../includes/db_config2.php';
	require_once '../Functions/Functions.php';


//Get data from database and assign to a variable

// these are the content type headers to send in php that
// 1) force the type to be CSV
header("Content-type: application/csv");
// 2) force the link to send something for download
header("Content-Disposition: attachment; filename=AllEmployees.csv");
// 3) attempt to prevent caching
header("Pragma: no-cache");
header("Expires: 0"); 

while ($row = mysql_fetch_array($GetEmployees)) 
{
$TimeRegistered = $row['TimeRegistered'];
$employeeID = $row['employeeID'];
$EmplFirstName = $row['EmplFirstName'];
$EmplMiddleInitial = $row['EmplMiddleInitial'];
$EmplLastName = ($row['EmplLastName']);
$ReferredBy = $row['ReferredBy'];
$EmplEmail = $row['EmplEmail'];
$EmplPhone = ($row['EmplCellPhone1']) . "-" . ($row['EmplCellPhone2']) . "-" . ($row['EmplCellPhone3']);
$pic= $row ['pic'];
$EmplStreet1 = $row['EmplStreet1'];
$EmplStreet2 = $row['EmplStreet2'];
$EmplCity = $row['EmplCity'];
$EmplState = $row['EmplState'];
$EmplZip = $row['EmplZip'];
$EmplCountry = $row['EmplCountry'];

$EmplPayFirstName = $row['EmplPayFirstName'];
$EmplPayLastName = $row['EmplPayLastName'];
$BusPayName = $row['BusPayName'];
$EmplPayStreet1 = $row['EmplPayStreet1'];
$EmplPayStreet2 = $row['EmplPayStreet2'];
$EmplPayCity = $row['EmplPayCity'];
$EmplPayState = $row['EmplPayState'];
$EmplPayZip = $row['EmplPayZip'];
$EmplPayCountry = $row['EmplPayCountry'];
$EmplPayPhone = ($row['EmplPayCell1']) . "-" . ($row['EmplPayCell2']) . "-" . ($row['EmplPayCell3']);
$EmplPayEmail = $row['EmplPayEmail'];
$EmplCountry = $row['EmplCountry'];


$ConfidentialityAgreement = $row['ConfidentialityAgreement'];
$IndependentContractorAgreement = $row['IndependentContractorAgreement'];
$w9 = $row['w9'];

$ReferredBy = $row['ReferredBy'];

//Disply data from database into a table -->
	echo $employeeID . ',';
	echo $EmplFirstName . ',';
	echo $EmplLastName . ',';
	echo $EmplEmail . ',';
	echo $EmplStreet1 . ',';
	echo $EmplStreet2 . ',';
	echo $EmplCity . ',';
	echo $EmplState . ',';
	echo $EmplZip . ',';
	echo $EmplPhone. ',';
	echo $ConfidentialityAgreement. ',';
	echo $IndependentContractorAgreement. ',';
	echo $w9;
	echo $LastLogin;
	echo "\r\n";
} 
?>



