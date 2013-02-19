<?php	

	//Enable Session Variables	
	session_start();

	//Connect to Database	
	include 'db_config2.php';
	require_once '../Functions/DealerFunctions.php';
	
	set_error_handler('error_handler');

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
	$directory = stripslashes($_POST['directory']);
	$facebook = stripslashes($_POST['facebook']);
	$SMS = stripslashes($_POST['SMS']);
	$YouTube = stripslashes($_POST['YouTube']);
	$CaBID = stripslashes($_POST['CaBID']);	
	
	if ($directory=="directoryON") {
		$DirPrice="99";
	}
	else {
		$DirPrice="0";
	}

	if ($facebook=="facebookON") {
		$FBPrice="1490";
	}
	else {
		$FBPrice="0";
	}

	if ($SMS=="SMSON") {
		$SMSPrice="990";
	}
	else {
		$SMSPrice="0";
	}
	
	if ($YouTube=="YouTubeON") {
		$YouTubePrice="199";
	}
	else {
		$YouTubePrice="0";
	}
	
	if ($CaBID=="CaBIDON") {
		$CaBIDPrice="399";
	}
	else {
		$CaBIDPrice="0";
	}

	$MthlyPmt = $Program+$DirPrice+$FBPrice+$SMSPrice+$YouTubePrice+$CaBIDPrice;

	$Authorization = stripslashes($_POST['Authorization']);
	$AgentFirstName = stripslashes($_POST['AgentFirstName']);
	$AgentLastName = stripslashes($_POST['AgentLastName']);
	$Signature = stripslashes($_POST['Signature']);
	$DateSigned = stripslashes($_POST['date']);
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
	$DateSigned = mysql_real_escape_string($DateSigned);
	$DealerUserName = mysql_real_escape_string($DealerUserName);
	$DealerPassword = mysql_real_escape_string($DealerPassword);

	$DealerPassword = hash( 'sha256', $DealerPassword );	
	$member = "Online Registration";

	

	//Run query to Add Dealership to database	
	$add_dealer = "
	INSERT INTO dealers (DealerUserName, DealerPassword, RepName, DealerName, DealerStreet1, DealerStreet2, DealerCity, DealerState, DealerZip, DealerCountry, DealerWebsite, Franchise, DealerMainContactFirst, DealerMainContactLast, DealerCellPhone1, DealerCellPhone2, DealerCellPhone3, DealerOfficePhone1, DealerOfficePhone2, DealerOfficePhone3, OfficePhoneExt, DealerEmail, ContactPosition, AccountPayFirstName, AccountPayLastName, AccountPayableEmail, AccountPayableCell1, AccountPayableCell2, AccountPayableCell3, LeadCell1, LeadCell2, LeadCell3, LeadEmail, DataFeedProvider, OtherDataFeedProvider, DataFeedMainContactFirst, DataFeedMainContactLast, DataFeedMainPhone1, DataFeedMainPhone2, DataFeedMainPhone3, DataFeedMainEmail, UsedCarsInStock, Rep, Program, Authorization, AgentFirstName, AgentLastName, Signature, DateSigned, directory, facebook, YouTube, CaBID, SMS, MthlyPmt)
	VALUES ('$DealerUserName', '$DealerPassword','$RepName', '$DealerName', '$DealerStreet1', '$DealerStreet2', '$DealerCity', '$DealerState', '$DealerZip', '$DealerCountry', '$DealerWebsite', '$Franchise', '$DealerMainContactFirst', '$DealerMainContactLast', '$DealerCellPhone1', '$DealerCellPhone2', '$DealerCellPhone3', '$OfficePhoneExt', '$DealerOfficePhone1', '$DealerOfficePhone2', '$DealerOfficePhone3', '$DealerEmail', '$ContactPosition', '$AccountPayFirstName', '$AccountPayLastName', '$AccountPayableEmail', '$AccountPayableCell1', '$AccountPayableCell2', '$AccountPayableCell3', '$LeadCell1', '$LeadCell2', '$LeadCell3', '$LeadEmail', '$DataFeedProvider', '$OtherDataFeedProvider', '$DataFeedMainContactFirst', '$DataFeedMainContactLast', '$DataFeedMainPhone1', '$DataFeedMainPhone2', '$DataFeedMainPhone3', '$DataFeedMainEmail', '$UsedCarsInStock', '$Rep', '$Program', '$Authorization', '$AgentFirstName', '$AgentLastName', '$Signature', '$DateSigned', '$directory', '$facebook', '$YouTube', '$CaBID', '$SMS', '$MthlyPmt')
	";	

	$result= mysql_query($add_dealer);
	
	restore_error_handler();
	
	if (!$result) {
    		die('There was an error- Please go back and try again.  We have been notified of this error.');
		}	

	$name = $AccountPayFirstName . " " . $AccountPayLastName;
	$address1 = $DealerStreet1;
	$address2 = $DealerStreet2;
	$city = $DealerCity;
	$state = $DealerState;
	$zip = $DealerZip;
	$phoneNumber = $AccountPayableCell1 . $AccountPayableCell2 . $AccountPayableCell3;
	$email = $AccountPayableEmail;

	$amount = $MthlyPmt . ".00";

	$var1 = $DateSigned;
	$month = substr($var1, 0, 2);
	$day = substr($var1, 3, 2);
	$year = substr($var1, 6, 4);
	$sep = "-";
	$startDate = $year . $sep . $month . $sep . $day;
			
	require_once '../Forms/DealerPaymentForm.php';
?>



	



	

	

