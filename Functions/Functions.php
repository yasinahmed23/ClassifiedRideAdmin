<?php
	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];

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

	//Count All Employees
	$GetEmployees = mysql_query("
		SELECT employeeID
		FROM employees");
	$numEmployees = mysql_num_rows($GetEmployees);
		
	//Get employees
	$GetEmployees = mysql_query("
		SELECT *
		FROM employees 
		ORDER BY employeeID DESC");
	
	//Get Employee info from last name
	$EmplLast_name = $_POST['search_string'];
	$GetEmployeeInfo = mysql_query("
		SELECT *
		FROM employees 
		WHERE EmplLastName='".$EmplLast_name."'");

	while ($row = mysql_fetch_array($GetEmployeeInfo)) 
	{
	$employeeID = $row['employeeID'];
	$EmplFirstName = $row['EmplFirstName'];
	$EmplMiddleInitial = $row['EmplMiddleInitial'];
	$ReferredBy = $row['ReferredBy'];
	$EmplEmail = $row['EmplEmail'];
	$EmplPhone = ($row['EmplCellPhone1']) . "-" . ($row['EmplCellPhone2']) . "-" . ($row['EmplCellPhone3']);
	$pic= $row ['pic'];
}
	//Get Employee ID from Username
		$GetEmployeeID = mysql_query("
			SELECT employeeID
			FROM  employees
			WHERE EmplUserName='$user'");

		while ($row = mysql_fetch_array($GetEmployeeID)) {
			$employeeID = $row['employeeID'];
		}

	//Get Employee Name from Username
	$GetEmployeeName = mysql_query("
		SELECT employee
		FROM  employees
		WHERE EmplUserName='$user'");

	while ($row = mysql_fetch_array($GetEmployeeName)) {
		$employee = $row['employee'];
	}


	//Get Employee First Name from Username
	$GetEmployeeFirstName = mysql_query("
		SELECT EmplFirstName
		FROM  employees
		WHERE EmplUserName='$user'");

	while ($row = mysql_fetch_array($GetEmployeeFirstName)) {
		$EmplFirstName= $row['EmplFirstName'];
	}
		
	//Check and see if New Hire Paperwork has been uploaded
	$GetNewHireInfo = mysql_query("
	SELECT ConfidentialityAgreement, IndependentContractorAgreement, w9
	FROM  employees
	WHERE EmplUserName='$user'
	");
	
	//Count Transactions for User
	$CountTrans = mysql_query("
	SELECT TransactionID
	FROM  transactions
	WHERE eID='$employeeID'");
	$num_Trans = mysql_num_rows($CountTrans);

	//Count Referrals for User
	$CountRefs = mysql_query("
	SELECT RefID
	FROM  Referrals
	WHERE EmployeeName='$employee'");
	$num_Ref = mysql_num_rows($CountRefs);

	//Count Registrations for User
	$CountRegs = mysql_query("
	SELECT  registered 
	FROM  transactions
	WHERE eID='$employeeID'
	AND (registered!= '')");
	$num_Regs = mysql_num_rows($CountRegs);


	//Count Renewals for User
	$CountRenewals = mysql_query("
	SELECT  Renewed
	FROM  transactions
	WHERE eID='$employeeID'
	AND (Renewed!= '')");
	$num_Renewals = mysql_num_rows($CountRenewals);


	//Get all Referral Data by EmployeeName
	$GetMyReferrals = mysql_query("
		SELECT *
		FROM  Referrals	
		WHERE  EmployeeName ='".$employee."'");
	
	//Get all Transaction Data by EmployeeName
	$GetTrans = mysql_query("
		SELECT *
		FROM  transactions	
		WHERE eID='".$employeeID."'");


	
	//Calculate RESIDUALS for User
	$CountRefComm = mysql_query(" 
		SELECT SUM(ReferralAmount) 
		AS total FROM transactions
		WHERE EmplReferral='$employee'");

	$RefCommTotal = mysql_fetch_assoc($CountRefComm);	
	
	//Calculate Registration Commission for User
	$RegCountComm = mysql_query(" 
		SELECT SUM(Commission) 
		AS total FROM transactions
		WHERE employee='$employee'
		AND (registered='798' OR registered='399')");

	$RegCommissionTotal = mysql_fetch_assoc($RegCountComm);
	
	//Calculate Renewal Commission for User
	$RenewCountComm = mysql_query(" 
		SELECT SUM(Commission) 
		AS total FROM transactions
		WHERE employee='$employee'
		AND (Renewed='798' OR Renewed='399')");

	$RenewCommissionTotal = mysql_fetch_assoc($RenewCountComm);

	$CommTOTAL = ($RegCommissionTotal['total']) + ($RenewCommissionTotal['total']);

	//Count All Dealers
	$GetDealers = mysql_query("
	SELECT DealerID, Program
	FROM dealers");
	$num_rows = mysql_num_rows($GetDealers);

	//Count Monthly Revenue from Dealer Registrations
	$CountDealers = mysql_query(" 
		SELECT SUM(Program) 
		AS total FROM dealers ");
	$DealerTotal = mysql_fetch_assoc($CountDealers);
	
	//Count Dealerships for User
	$CountDealersForUser = mysql_query("
		SELECT DealerID
		FROM dealers
		WHERE RepName='$employee' ");
	$numDealersUser = mysql_num_rows($CountDealersForUser);

	//Get All Dealer info for employee view
	$GetDealerInfo = mysql_query("
		SELECT *
		FROM dealers ");
?>
