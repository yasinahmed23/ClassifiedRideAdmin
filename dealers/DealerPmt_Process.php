<?php
$rspCode = $_GET['rspCode'];
$TranNr = $_GET['TranNr'];
$Date =$_GET['Date'];
$amount = $_GET['amount'];
$auth = $_GET['auth'];
$AVSRslt = $_GET['AVSRslt'];
$SecRslt = $_GET['SecRslt'];
$PmtType = $_GET['PmtType'];
$ACI = $_GET['ACI'];
$ValCode = $_GET['ValCode'];
$SwchKey = $_GET['SwchKey'];
$STAN = $_GET['STAN'];
$CardType = $_GET['CardType'];
$AddlAmount = $_GET['AddlAmount'];
$AmountType = $_GET['AmountType'];
$ShipToZip = $_GET['ShipToZip'];
$AccountHoldername = $_GET['AccountHoldername'];
$CustomerReferenceID = $_GET['CustomerReferenceID'];
$TaxAmount = $_GET['TaxAmount'];
$TaxIndicator = $_GET['TaxIndicator'];
$AddressLine1 = $_GET['AddressLine1'];
$AddressLine2 = $_GET['AddressLine2'];
$City = $_GET['City'];
$State = $_GET['State'];
$Zip = $_GET['Zip'];
$SECC = $_GET['SECC'];
$Email = $_GET['Email'];
$Phone = $_GET['Phone'];
$PONumber = $_GET['PONumber'];
$Description = $_GET['Description'];
$mapCAID = $_GET['mapCAID'];
$IndCode = $_GET['IndCode'];

if ($Auth=="Declined") {
	echo "Trans ID: " . $TransID . " was declined.  Reason:  " . $Notes;
}
else {
	//once we get fieldname for Dealer's name we can search DB for entry so we can continue registration (create transaction) - also set MemberStatus to ACTIVE
	
	//retrieve employee ID info from Employee Table	
	$SelEmpl = mysql_query("
	SELECT employeeID FROM employees
	WHERE employee='".$RepName."'
	");

	while ($row = mysql_fetch_array($SelEmpl))
	{
		$employeeID= $row ['employeeID'];			
	}

	//retrieve employee email info from Employee Table	
	$SelEmpl = mysql_query("
	SELECT EmplEmail FROM employees
	WHERE employee='".$RepName."'
	");

	while ($row = mysql_fetch_array($SelEmpl))
	{
		$EmplEmail= $row ['EmplEmail'];			
	}

	//Get employee name from Referral Table (to receive bonus for their empl signing a dealership
	
	$SelEmplReferral = mysql_query("
	SELECT EmployeeName  
	FROM  Referrals
	WHERE NewEmplName ='".$RepName."'
	");

	while ($row = mysql_fetch_array($SelEmplReferral))
	{
		$EmplReferral= $row ['EmployeeName'];			
	}

	//Get email address of EmplReferral
	
	$SelEmplReferralEmail = mysql_query("
	SELECT EmplEmail
	FROM  employees
	WHERE employee ='".$EmplReferral."'
	");

	while ($row = mysql_fetch_array($SelEmplReferralEmail))
	{
		$EmplReferralEmail= $row ['EmplEmail'];			
	}

	
	//Calculate Commission & Referral Fee
	if ($Program == "798") {
		$Commission = "300";
		$ReferralAmount="60";
	}
	else {
		$Commission = "150";
		$ReferralAmount="30";
	}
	
	$Commission=($Commission+($DirPrice*.2)+($FBPrice*.2)+($SMSPrice*.2)+($YouTubePrice*.2)+($CaBIDPrice*.2));
	

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
	INSERT INTO transactions (eID, employee, registered, Commission, DealerName, DealerID, member, EmplReferral, ReferralAmount)
	VALUES ('$employeeID', '$RepName', '$MthlyPmt', '$Commission', '$DealerName', '$DealerID', '$member', '$EmplReferral', '$ReferralAmount')
	";

	$result2= mysql_query($add_transaction);
	if (!$result2) {
    		die('Invalid query: ' . mysql_error());
		}

	//Create session variable from data and redirect page
	$_SESSION['DealerUser']=$DealerUserName;

	//SEND DEALER REGISTRATION NOTIFICATION VIA EMAIL TO SYSTEM
		$to = "classifiedridewebsite@gmail.com";
		$subject = $DealerName . " registered for the $" .  $Program . "program." ;
		$message = $DealerName . " registered for the $" .  $Program . " program.  Their rep is: " . $RepName . ".  Their email is: " . $DealerEmail . ".  " . $EmplReferral . "(" . $EmplReferralEmail . ") should receive a referral bonus.";
		$from = $DealerEmail;
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);

	//SEND DEALER REGISTRATION NOTIFICATION VIA EMAIL TO DEALER
		$to = $DealerEmail;
		$subject = "Thank you for registering with us" ;
		$message = " Thanks for registering for the $" .  $Program . " program.  Your rep is: " . $RepName;
		$from = "classifiedridewebsite@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);

	//SEND DEALER REGISTRATION NOTIFICATION VIA EMAIL TO REFERRAL
		$to = $EmplReferralEmail;
		$subject = $RepName . " Signed " . $DealerName . ".";
		$message = $RepName . " Signed " . $DealerName . ".";
		$from = "classifiedridewebsite@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);

	//SEND DEALER REGISTRATION NOTIFICATION VIA EMAIL TO EMPLOYEE
		$to = $EmplEmail;
		$subject = "You Signed " . $DealerName . ".";
		$message = "You Signed " . $DealerName . ".";
		$from = "classifiedridewebsite@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
}
?>

