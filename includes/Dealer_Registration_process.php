<?php	

	//Enable Session Variables	
	session_start();

	//Connect to Database	
	include 'db_config2.php';

	

	//Save user input as variable
	$DealerName = stripslashes($_POST['DealerName']);$DealerStreet1 = stripslashes($_POST['DealerStreet1']);
	$DealerStreet2 = stripslashes($_POST['DealerStreet2']);
	$DealerCity = stripslashes($_POST['DealerCity']);
	$DealerState = stripslashes($_POST['DealerState']);
	$DealerZip = stripslashes($_POST['DealerZip']);
	$DealerCountry = stripslashes($_POST['DealerCountry']);
	$DealerWebsite = stripslashes($_POST['DealerWebsite']);
	$Franchise = stripslashes($_POST['Franchise']);
	$DealerMainContactFirst = stripslashes($_POST['DealerMainContactFirst']);
	$DealerMainContactLast = stripslashes($_POST['DealerMainContactLast']);
	$DealerCellPhone1 = stripslashes($_POST['DealerCellPhone1']);
	$DealerCellPhone2 = stripslashes($_POST['DealerCellPhone2']);
	$DealerCellPhone3 = stripslashes($_POST['DealerCellPhone3']);
	$DealerOfficePhone1 = stripslashes($_POST['DealerOfficePhone1']);
	$DealerOfficePhone1 = stripslashes($_POST['DealerOfficePhone1']);
	$DealerOfficePhone2 = stripslashes($_POST['DealerOfficePhone2']);
	$DealerOfficePhone3 = stripslashes($_POST['DealerOfficePhone3']);
	$OfficePhoneExt = stripslashes($_POST['OfficePhoneExt']);
	$DealerEmail = stripslashes($_POST['DealerEmail']);
	$ContactPosition = stripslashes($_POST['ContactPosition']);
	$AccountPayFirstName = stripslashes($_POST['AccountPayFirstName']);
	$AccountPayLastName = stripslashes($_POST['AccountPayLastName']);
	$AccountPayableEmail = stripslashes($_POST['AccountPayableEmail']);
	$AccountPayableCell1 = stripslashes($_POST['AccountPayableCell1']);
	$AccountPayableCell2 = stripslashes($_POST['AccountPayableCell2']);
	$AccountPayableCell3 = stripslashes($_POST['AccountPayableCell3']);
	$LeadCell1 = stripslashes($_POST['LeadCell1']);
	$LeadCell2 = stripslashes($_POST['LeadCell2']);
	$LeadCell3 = stripslashes($_POST['LeadCell3']);
	$LeadEmail = stripslashes($_POST['LeadEmail']);
	$DataFeedProvider = stripslashes($_POST['DataFeedProvider']);
	$OtherDataFeedProvider = stripslashes($_POST['OtherDataFeedProvider']);
	$DataFeedMainContactFirst = stripslashes($_POST['DataFeedMainContactFirst']);
	$DataFeedMainContactLast = stripslashes($_POST['DataFeedMainContactLast']);
	$DataFeedMainPhone1 = stripslashes($_POST['DataFeedMainPhone1']);
	$DataFeedMainPhone2 = stripslashes($_POST['DataFeedMainPhone2']);
	$DataFeedMainPhone3 = stripslashes($_POST['DataFeedMainPhone3']);
	$DataFeedMainEmail = stripslashes($_POST['DataFeedMainEmail']);
	$UsedCarsInStock = stripslashes($_POST['UsedCarsInStock']);
	$Rep = stripslashes($_POST['Rep']);
	$RepName = stripslashes($_POST['search_string']);
	$Program = stripslashes($_POST['Program']);
	$Authorization = stripslashes($_POST['Authorization']);
	$AgentFirstName = stripslashes($_POST['AgentFirstName']);
	$AgentLastName = stripslashes($_POST['AgentLastName']);
	$Signature = stripslashes($_POST['Signature']);
	$DateSigned1 = stripslashes($_POST['DateSigned1']);
	$DateSigned2 = stripslashes($_POST['DateSigned2']);
	$DateSigned3 = stripslashes($_POST['DateSigned3']);
	$DealerUserName = stripslashes($_POST['DealerUserName']);
	$DealerPassword = stripslashes($_POST['DealerPassword']);
 
	
	$DealerName = mysql_real_escape_string($DealerName);
	$DealerStreet1 = mysql_real_escape_string($DealerStreet1);
	$DealerStreet2 = mysql_real_escape_string($DealerStreet2);
	$DealerCity = mysql_real_escape_string($DealerCity);
	$DealerState = mysql_real_escape_string($DealerState);
	$DealerZip = mysql_real_escape_string($DealerZip);
	$DealerCountry = mysql_real_escape_string($DealerCountry);
	$DealerWebsite = mysql_real_escape_string($DealerWebsite);
	$Franchise = mysql_real_escape_string($Franchise);
	$DealerMainContactFirst = mysql_real_escape_string($DealerMainContactFirst);
	$DealerMainContactLast = mysql_real_escape_string($DealerMainContactLast);
	$DealerCellPhone1 = mysql_real_escape_string($DealerCellPhone1);
	$DealerCellPhone2 = mysql_real_escape_string($DealerCellPhone2);
	$DealerCellPhone3 = mysql_real_escape_string($DealerCellPhone3);
	$DealerOfficePhone1 = mysql_real_escape_string($DealerOfficePhone1);
	$DealerOfficePhone1 = mysql_real_escape_string($DealerOfficePhone1);
	$DealerOfficePhone2 = mysql_real_escape_string($DealerOfficePhone2);
	$DealerOfficePhone3 = mysql_real_escape_string($DealerOfficePhone3);
	$OfficePhoneExt = mysql_real_escape_string($OfficePhoneExt);
	$DealerEmail = mysql_real_escape_string($DealerEmail);
	$ContactPosition = mysql_real_escape_string($ContactPosition);
	$AccountPayFirstName = mysql_real_escape_string($AccountPayFirstName);
	$AccountPayLastName = mysql_real_escape_string($AccountPayLastName);
	$AccountPayableEmail = mysql_real_escape_string($AccountPayableEmail);
	$AccountPayableCell1 = mysql_real_escape_string($AccountPayableCell1);
	$AccountPayableCell2 = mysql_real_escape_string($AccountPayableCell2);
	$AccountPayableCell3 = mysql_real_escape_string($AccountPayableCell3);
	$LeadCell1 = mysql_real_escape_string($LeadCell1);
	$LeadCell2 = mysql_real_escape_string($LeadCell2);
	$LeadCell3 = mysql_real_escape_string($LeadCell3);
	$LeadEmail = mysql_real_escape_string($LeadEmail);
	$DataFeedProvider = mysql_real_escape_string($DataFeedProvider);
	$OtherDataFeedProvider = mysql_real_escape_string($OtherDataFeedProvider);
	$DataFeedMainContactFirst = mysql_real_escape_string($DataFeedMainContactFirst);
	$DataFeedMainContactLast = mysql_real_escape_string($DataFeedMainContactLast);
	$DataFeedMainPhone1 = mysql_real_escape_string($DataFeedMainPhone1);
	$DataFeedMainPhone2 = mysql_real_escape_string($DataFeedMainPhone2);
	$DataFeedMainPhone3 = mysql_real_escape_string($DataFeedMainPhone3);
	$DataFeedMainEmail = mysql_real_escape_string($DataFeedMainEmail);
	$UsedCarsInStock = mysql_real_escape_string($UsedCarsInStock);
	$Rep = mysql_real_escape_string($Rep);
	$RepName = mysql_real_escape_string($RepName);
	$Program = mysql_real_escape_string($Program);
	$Authorization = mysql_real_escape_string($Authorization);
	$AgentFirstName = mysql_real_escape_string($AgentFirstName);
	$AgentLastName = mysql_real_escape_string($AgentLastName);
	$Signature = mysql_real_escape_string($Signature);
	$DateSigned1 = mysql_real_escape_string($DateSigned1);
	$DateSigned2 = mysql_real_escape_string($DateSigned2);
	$DateSigned3 = mysql_real_escape_string($DateSigned3);
	$DealerUserName = mysql_real_escape_string($DealerUserName);
	$DealerPassword = mysql_real_escape_string($DealerPassword);

	$DealerPassword = hash( 'sha256', $DealerPassword );	
	$member = "Online Registration";

	//Run query to Add Dealership to database	
	$add_dealer = "
	INSERT INTO dealers (DealerUserName, DealerPassword, RepName, DealerName, DealerStreet1, DealerStreet2, DealerCity, DealerState, DealerZip, DealerCountry, DealerWebsite, Franchise, DealerMainContactFirst, DealerMainContactLast, DealerCellPhone1, DealerCellPhone2, DealerCellPhone3, DealerOfficePhone1, DealerOfficePhone2, DealerOfficePhone3, OfficePhoneExt, DealerEmail, ContactPosition, AccountPayFirstName, AccountPayLastName, AccountPayableEmail, AccountPayableCell1, AccountPayableCell2, AccountPayableCell3, LeadCell1, LeadCell2, LeadCell3, LeadEmail, DataFeedProvider, OtherDataFeedProvider, DataFeedMainContactFirst, DataFeedMainContactLast, DataFeedMainPhone1, DataFeedMainPhone2, DataFeedMainPhone3, DataFeedMainEmail, UsedCarsInStock, Rep, Program, Authorization, AgentFirstName, AgentLastName, Signature, DateSigned1, DateSigned2, DateSigned3)
	VALUES ('$DealerUserName', '$DealerPassword','$RepName', '$DealerName', '$DealerStreet1', '$DealerStreet2', '$DealerCity', '$DealerState', '$DealerZip', '$DealerCountry', '$DealerWebsite', '$Franchise', '$DealerMainContactFirst', '$DealerMainContactLast', '$DealerCellPhone1', '$DealerCellPhone2', '$DealerCellPhone3', '$OfficePhoneExt', '$DealerOfficePhone1', '$DealerOfficePhone2', '$DealerOfficePhone3', '$DealerEmail', '$ContactPosition', '$AccountPayFirstName', '$AccountPayLastName', '$AccountPayableEmail', '$AccountPayableCell1', '$AccountPayableCell2', '$AccountPayableCell3', '$LeadCell1', '$LeadCell2', '$LeadCell3', '$LeadEmail', '$DataFeedProvider', '$OtherDataFeedProvider', '$DataFeedMainContactFirst', '$DataFeedMainContactLast', '$DataFeedMainPhone1', '$DataFeedMainPhone2', '$DataFeedMainPhone3', '$DataFeedMainEmail', '$UsedCarsInStock', '$Rep', '$Program', '$Authorization', '$AgentFirstName', '$AgentLastName', '$Signature', '$DateSigned1', '$DateSigned2', '$DateSigned3')
	";

	$result= mysql_query($add_dealer);
	if (!$result) {
    		die('Invalid query: ' . mysql_error());
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

	//retrieve employee name from Referral Table (to receive bonus for their empl signing a dealership
	
	$SelEmplReferral = mysql_query("
	SELECT EmployeeName  
	FROM  Referrals
	WHERE NewEmplName ='".$RepName."'
	");

	while ($row = mysql_fetch_array($SelEmplReferral))
	{
		$EmplReferral= $row ['EmployeeName'];			
	}

	
	//Calculate Commission
	if ($Program == "798") {
		$Commission = "300";
	}
	else $Commission = "150";


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

	//Create session variable from data and redirect page
	$_SESSION['DealerUser']=$DealerUserName;

	//SEND DEALER REGISTRATION NOTIFICATION VIA EMAIL
		$to = "classifiedridewebsite@gmail.com, stephmcglathery@gmail.com";
		$subject = $DealerName . " registered for the " .  $Program . "program." ;
		$message = $DealerName . " registered for the " .  $Program . " program.  Their rep is: " . $RepName . ".  Their email is: " . $DealerEmail . "." . $EmplReferral . " should receive a referral bonus.";
		$from = $DealerEmail;
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
	
	header( 'Location: /Dealers.php' ) ;
?>



	



	

	
