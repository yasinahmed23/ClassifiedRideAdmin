<?php
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
	$GetEmployeeName = mysql_query("
		SELECT EmplFirstName
		FROM  employees
		WHERE EmplUserName='$user'");

	while ($row = mysql_fetch_array($GetEmployeeName)) {
		$EmplFirstName= $row['EmplFirstName'];
	}	

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
?>
