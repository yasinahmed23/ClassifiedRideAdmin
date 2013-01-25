<?php
	//Enable Session Variables	
	session_start();
	$user = $_SESSION['user'];

	//Connect to Database	
	require_once 'includes/db_config2.php';

	// create variables out of user input
	$numdays=$_POST['numdays'];	
	
	$sql = mysql_query("
	SELECT *
	FROM employees
	where TimeRegistered between date_sub(now(),INTERVAL '$numdays' DAY) and now()");

// these are the content type headers to send in php that
// 1) force the type to be CSV
header("Content-type: application/csv");
// 2) force the link to send something for download
header("Content-Disposition: attachment; filename=EmployeesViewLast$days.csv");
// 3) attempt to prevent caching
header("Pragma: no-cache");
header("Expires: 0"); 

while ($row = mysql_fetch_array($sql)) 
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
$ConfidentialityAgreement = $row['ConfidentialityAgreement'];
$IndependentContractorAgreement = $row['IndependentContractorAgreement'];
$w9 = $row['w9'];

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
	echo "\r\n";
} 
?>



