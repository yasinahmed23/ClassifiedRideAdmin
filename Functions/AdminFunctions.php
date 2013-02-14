<?php
	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

	date_default_timezone_set('America/Chicago');
	$date = date('m/d/Y h:i:s a', time());

	$ip=$_SERVER['REMOTE_ADDR'];

	function error_handler($errno, $error, $file, $line, $context) {
		//Email me if there is an error
		$to = "ClassifiedRideWebsite@gmail.com";
		$subject = "Error";
		$message = "Error # " . $errno . " - " . $error . " / " . $file . "Line # " . $line . " / " . $context;
		$from = "error@ClassifiedRide.com/Admin";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
		//printf("The error handler got the error! The error says %s", $error);
		return true;
	} 

	//Count Total Employees
	$CountEmployees = mysql_query("
		SELECT  employeeID
		FROM   employees");
		$NumEmployees = mysql_num_rows($CountEmployees);

	//Count Employees From Last 7 Days
	$CountEmployees7Days = mysql_query("
		SELECT  employeeID
		FROM   employees
		where TimeRegistered between date_sub(now(),INTERVAL 7 DAY) and now()");
		$NumEmployees7Days = mysql_num_rows($CountEmployees7Days);

	//Count Total Dealers
	$CountDealers = mysql_query("
		SELECT  DealerID
		FROM    dealers");
		$NumDealers = mysql_num_rows($CountDealers);

	//Count Dealers From Last 7 Days
	$CountDealers7Days = mysql_query("
		SELECT  DealerID
		FROM    dealers
		where TimeRegistered between date_sub(now(),INTERVAL 7 DAY) and now()");
		$NumDealers7Days= mysql_num_rows($CountDealers7Days);

	//Count Dealers Who are Inactive
	$CountDealersInactive = mysql_query("
		SELECT  MemberStatus
		FROM    dealers
		where MemberStatus = 'INACTIVE'");
		$NumDealersInactive= mysql_num_rows($CountDealersInactive);


	//Count Total Transactions
	$CountTransactions = mysql_query("
		SELECT  TransactionID
		FROM     transactions");
	$NumTransactions = mysql_num_rows($CountTransactions);

	//Count Number of Registrations
	$CountNumRegs = mysql_query("
		SELECT  registered
		FROM     transactions
		WHERE registered != ' '");
	$NumRegistrations = mysql_num_rows($CountNumRegs);

	//Count Revenue from  Registrations
	$CountRegistrations = mysql_query(" 
		SELECT SUM(registered) 
		AS total FROM transactions");
	$RegestrationTotal = mysql_fetch_assoc($CountRegistrations);

	//Count Number of Renewals
	$CountNumRenewed = mysql_query("
		SELECT  Renewed
		FROM transactions
		WHERE Renewed != ' '");
		$NumRenewals = mysql_num_rows($CountNumRenewed);


	//Count Revenue from  Renewals
	$CountRenewals = mysql_query(" 
		SELECT SUM(Renewed) 
		AS total FROM transactions");
	$RenewalTotal = mysql_fetch_assoc($CountRenewals);

	//Count Total Renevue
	$TotalRevenue=($RenewalTotal[total]+$RegestrationTotal[total]);

	//Count Total Commission
	$CountTotalComm = mysql_query(" 
		SELECT SUM(Commission) 
		AS total FROM transactions");
	$CommTotal = mysql_fetch_assoc($CountTotalComm);

	//Count Commission from last 7 days
	$CountComm7Days = mysql_query(" 
		SELECT SUM(Commission) 
		AS total FROM transactions
		where TransactionDate between date_sub(now(),INTERVAL 7 DAY) and now()");
	$Comm7Days = mysql_fetch_assoc($CountComm7Days);

	//Calculate Net 
	$NetProfit=($TotalRevenue-$CommTotal[total]);
	
	//Count Num of Referrals
	$CountTotalReferrals = mysql_query("
	SELECT RefID
	FROM Referrals");
	$num_Referrals = mysql_num_rows($CountTotalReferrals);
	
	//Get All Transaction Data and Sort by ID Desc
	$GetTransactions = mysql_query("
		SELECT *
		FROM transactions 
		ORDER BY TransactionID DESC");

//GET ALL REFERRALS
function GetReferrals() {
	//Get Employee List from Referral Tbl so we can count # hired for each one
	$SelectReferrals = mysql_query("
		SELECT DISTINCT EmployeeName
		FROM Referrals 
		ORDER BY EmployeeName ASC");

	//GET EMPLOYEE LIST FROM REFERRAL TABLE 
	$rowNumber=0;
	while ($row = mysql_fetch_array($SelectReferrals)) {
		$EmployeeName = $row['EmployeeName'];
		$NewEmplName = $row['NewEmplName'];
		$rowNumber++;
		//Count the num the current employee has hired
		$CountHiredbyEmpl = mysql_query("
			SELECT RefID
			FROM Referrals
				WHERE EmployeeName='".$EmployeeName."'");

		$num_Hired = mysql_num_rows($CountHiredbyEmpl);
		echo "<strong>" . $rowNumber . ")&nbsp;" . $EmployeeName . "has hired " . $num_Hired . " people.</strong>";

		//GET REFERRAL LIST FOR CURRENT EMPLOYEE
		$GetReferals = mysql_query("
			SELECT *
			FROM Referrals 
			WHERE EmployeeName='".$EmployeeName."'
			ORDER BY EmployeeName ASC");

		include '../includes/ReferralListByEmployee.php';
		echo "<hr>";
		} 
}
?>
