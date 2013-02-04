<?php
$TransID = $_POST['TransID'];
$RefNo = $_POST['RefNo'];
$AVSCode =$_POST['AVSCode'];
$CVV2ResponseMsg = $_POST['CVV2ResponseMsg'];
$Auth = $_POST['Auth'];
$Notes = $_POST['Notes'];

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

