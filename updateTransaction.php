<?php	

	//Enable Session Variables	
	session_start();

	//Connect to Database	
	include 'includes/db_config2.php';

	$RepName="Stephanie l McGlathery";
	$Program = "799";
	$Commission = "300";
	$member="testing";

	//retrieve Rep ID info from Employee Table	
	$SelEmpl = mysql_query("
	SELECT employeeID FROM employees
	WHERE employee='".$RepName."'
	");

	while ($row = mysql_fetch_array($SelEmpl))
	{
		$employeeID= $row ['employeeID'];			
	}
	
	//retrieve employee name from Referral Table (to receive bonus for their empl signing a dealership
	
	$SelEmplReferral = mysql_query("
	SELECT EmployeeName  
	FROM  Referrals
	WHERE NewEmplName ='".$RepName."'
	");

	while ($row = mysql_fetch_array($SelEmpl))
	{
		$EmplReferral= $row ['EmployeeName'];			
	}

	//retrieve Dealer ID info from Dealer Table

	$SelDealer = mysql_query("
	SELECT DealerID FROM dealers
	WHERE DealerName='".$DealerName."'
	");
	while ($row = mysql_fetch_array($SelDealer))

	{
		$DealerID= $row ['DealerID'];			
	}



	//Run query to Add Transaction to database	

	$add_transaction = "
	INSERT INTO transactions (eID, employee, registered, Commission, DealerName, DealerID, member, EmplReferral)
	VALUES ('$employeeID', '$RepName', '$Program', '$Commission', '$DealerName', '$DealerID', '$member', '$EmplReferral')
	";

	$result2= mysql_query($add_transaction);
	if (!$result2) {
    		die('Invalid query: ' . mysql_error());
		}

?>



	



	

	

