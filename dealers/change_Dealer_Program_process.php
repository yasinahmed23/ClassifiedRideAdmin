<?php
	//Enable Session Variables	
	session_start();
	$DealerUser = $_SESSION['DealerUser'];

	//Connect to Database	
	include '../includes/db_configDealers.php';
	
	
	// create variables out of user input
	$program=$_POST['Program'];

	// Protect MySQL injection
	$program = stripslashes($program);
	$program = mysql_real_escape_string($program);

	
	mysql_query("UPDATE dealers SET Program='".$program."'
WHERE DealerUserName='".$DealerUser."'");

	
	if ($Program == "798") {
		$Commission = "100";
	}
	else $Commission = "50";

	
	//retrieve Dealer ID info from Dealer Table
	$SelDealer = mysql_query("
	SELECT DealerID, RepName, DealerName 
	FROM dealers
	WHERE DealerUserName='".$DealerUser."'
	");
	while ($row = mysql_fetch_array($SelDealer))
	{
		$DealerID= $row ['DealerID'];	
		$RepName= $row ['RepName'];
		$DealerName= $row ['DealerName'];	
	}	

	
	//retrieve employee ID info from Employee Table	
	$SelEmpl = mysql_query("
	SELECT employeeID FROM employees
	WHERE employee='".$RepName."'
	");
	while ($row = mysql_fetch_array($SelEmpl))
	{
		$employeeID= $row ['employeeID'];			
	}

	
	//Update Transactions table for next month
	$add_transaction = "
	INSERT INTO transactions (eID, employee, Renewed, Commission, DealerName, DealerID)
	VALUES ('$employeeID', '$RepName', '$program', '$Commission', '$DealerName', '$DealerID')
	";
	
	$result= mysql_query($add_transaction);
	
	header( 'Location: ../edit_DealerProfile.php' ) ;
?>
