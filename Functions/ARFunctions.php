<?php
	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];
	
	$ip=$_SERVER['REMOTE_ADDR'];

	function getTime($connector) {
		$connector = new DbConnector();
		if (!$connector) {
			die('Could not connect');
		}
	date_default_timezone_set('America/Chicago');
	$date = date('m/d/Y h:i:s a', time());
	mysql_close();
	}


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
		mysql_close();
	} 
	
	function getDealerID($connector) {
		$connector = new DbConnector();
		if (!$connector) {
			die('Could not connect');
		}
	
		$DealerName= $_POST['search_string'];
	
		$GetDealerID = "SELECT DealerID FROM dealers WHERE DealerName='".$DealerName."'";
	
		$result = $connector->query($GetDealerID);
	
		while ($row = mysql_fetch_array($result)) {
	  		$DealerID =  $row[0];
			echo $DealerID;
		}

		$num = mysql_num_rows($result);
	
		mysql_close();
	}

	//Get Current Payment
	function GetPmt($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'];

		$GetPmt = "SELECT MthlyPmt FROM dealers WHERE DealerName='$DealerName'";

		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];

		return $MthlyPmt;
		}
	}

	//Turn Directory ON
	function DirectoryOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;

		//Get Directory Status
		$SelectStatus = "SELECT directory FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$directory = $row[0];
		}
			//Proceed if directory is off
			if ($directory!="directoryON") {
				$SetOn = "UPDATE dealers SET directory='directoryON' WHERE DealerName='$DealerName'";
	
				$result = $connector->query($SetOn);
		
				//Get Monthly Payment
				$MthlyPmt = GetPmt($connector);		

				//Calculate Payment
				$MthlyPmt=$MthlyPmt+99;

				//Update Monthly Payment
				$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
				$SetPmt = $connector->query($UpdatePmt);
			}

		mysql_close();
	}

	//Turn Directory OFF
	function DirectoryOFF($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		
		//Get Directory Status
		$SelectStatus = "SELECT directory FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$directory = $row[0];
		}
		
		//Proceed if directory is on
		if ($directory=="directoryON") {
			$SetDeclined = "UPDATE dealers SET directory='DirectoryDeclined' WHERE DealerName='$DealerName'";
			$result = $connector->query($SetDeclined);

			//Calculate Payment 
			$MthlyPmt = GetPmt($connector);
			$MthlyPmt=$MthlyPmt-99;

			//Update Monthly Payment
			$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
			$SetPmt = $connector->query($UpdatePmt);
		}
		mysql_close();
	}

	//Turn Facebook OFF
	function FaceBookOFF($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;

		//Get facebook Status
		$SelectStatus = "SELECT facebook FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$facebook = $row[0];
		}
		
		//Proceed if facebook is on
		if ($facebook=="facebookON") {
			$SetDeclined = "UPDATE dealers SET facebook='FacebookDeclined' WHERE DealerName='$DealerName'";
	
			$result = $connector->query($SetDeclined);

			//Calculate Payment 
			$MthlyPmt = GetPmt($connector);
			$MthlyPmt=$MthlyPmt-1490;

			//Update Monthly Payment
			$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
			$SetPmt = $connector->query($UpdatePmt);		
		}

		mysql_close();
	}

	//Turn Facebook ON
	function FaceBookOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;

		//Get facebook Status
		$SelectStatus = "SELECT facebook FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$facebook = $row[0];
		}
		
		//Proceed if facebook is off
		if ($facebook!="facebookON") {
		$SetOn = "UPDATE dealers SET facebook='facebookON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		//Calculate Payment 
		$MthlyPmt = GetPmt($connector);
		$MthlyPmt=$MthlyPmt+1490;

		//Update Monthly Payment
		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
		$SetPmt = $connector->query($UpdatePmt);
		}
		mysql_close();
	}


	//Turn YouTube OFF
	function YouTubeOFF($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;

		//Get YouTube Status 
		$SelectStatus = "SELECT YouTube FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$YouTube = $row[0];
		}
		
		//Proceed if YouTube is on
		if ($YouTube=="YouTubeON") {
		$SetDeclined = "UPDATE dealers SET YouTube='YouTubeDeclined' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetDeclined);

		//Calculate Payment 
		$MthlyPmt = GetPmt($connector);		
		$MthlyPmt=$MthlyPmt-199;

		//Update Monthly Payment
		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
		$SetPmt = $connector->query($UpdatePmt);
		}
		mysql_close();
	}

	//Turn YouTube ON
	function YouTubeOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;

		//Get YouTube Status
		$SelectStatus = "SELECT YouTube FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$YouTube = $row[0];
		}
		
		//Proceed if YouTube is off
		if ($YouTube!="YouTubeON") {
		$SetOn = "UPDATE dealers SET YouTube='YouTubeON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		//Calculate Payment 
		$MthlyPmt = GetPmt($connector);
		$MthlyPmt=$MthlyPmt+199;

		//Update Monthly Payment
		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
		$SetPmt = $connector->query($UpdatePmt);
		}
		mysql_close();
	}
			
	//Turn SMS ON
	function SMSOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		
		//Get SMS Status
		$SelectStatus = "SELECT SMS FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$SMS = $row[0];
		}
		
		//Proceed if SMS is off
		if ($SMS!="SMSON") {
		$SetOn = "UPDATE dealers SET SMS='SMSON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		//Calculate Payment 
		$MthlyPmt = GetPmt($connector);
		$MthlyPmt=$MthlyPmt+990;

		//Update Monthly Payment
		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
		$SetPmt = $connector->query($UpdatePmt);
		}
		mysql_close();
	}


	//Turn SMS OFF
	function SMSOff($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;

		//Get SMS Status
		$SelectStatus = "SELECT SMS FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$SMS = $row[0];
		}
			
		//Proceed if SMS is off
		if ($SMS=="SMSON") {
		$SetDeclined = "UPDATE dealers SET SMS='SMSDeclined' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetDeclined);

		//Calculate Payment 
		$MthlyPmt = GetPmt($connector);
		$MthlyPmt=$MthlyPmt-990;

		//Update Monthly Payment
		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
		$SetPmt = $connector->query($UpdatePmt);
		}
		mysql_close();
	}


	//Turn Cabid OFF
	function CabidOff($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;

		//Get Cabid Status
		$SelectStatus = "SELECT CaBID FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$CaBID = $row[0];
		}
		
		//Proceed if Cabid is on
		if ($CaBID=="CaBIDON") {
		$SetDeclined = "UPDATE dealers SET CaBID='CaBIDDeclined'WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetDeclined);

		//Calculate Payment
		$MthlyPmt = GetPmt($connector);
		$MthlyPmt=$MthlyPmt-399;

		//Update Monthly Payment
		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
		$SetPmt = $connector->query($UpdatePmt);
		}
		mysql_close();
	}

	//Turn Cabid ON
	function CabidOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;

		//Get Cabid Status
		$SelectStatus = "SELECT CaBID FROM dealers WHERE DealerName='".$DealerName."'";
		$GetStatus = $connector->query($SelectStatus);

		while ($row = mysql_fetch_array($GetStatus)) {
  			$CaBID = $row[0];
		}
		
		//Proceed if Cabid is off
		if ($CaBID!="CaBIDON") {
		$SetOn = "UPDATE dealers SET CaBID='CaBIDON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		//Calculate Payment 
		$MthlyPmt = GetPmt($connector);
		$MthlyPmt=$MthlyPmt+399;

		//Update Monthly Payment
		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
		$SetPmt = $connector->query($UpdatePmt);
		}
		mysql_close();
	}

	//Set Dealer Inactive
	function dealerInactive($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$setInactive = "UPDATE dealers SET MemberStatus=INACTIVE WHERE DealerName='$DealerName'";
	
		$result = $connector->query($setInactive);
	
		mysql_close();
	}

	//Set Cancelled Date
	function dealerCancelDate($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetCancelledDate = "UPDATE  dealers SET Cancelled='$date' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetCancelledDate);

		mysql_close();
	}

	//Set Restore Date
	function dealerRestoreDate($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		
		date_default_timezone_set('America/Chicago');
		$date = date('m/d/Y h:i:s a', time());

		$SetRestoreDate = "UPDATE  dealers SET Restored='$date' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetRestoreDate);
	
		mysql_close();
	}

	//Get Dealer's Page
	function getDealerPage($connector) {
		$connector = new DbConnector();
		if (!$connector) {
			die('Could not connect');
		}
	
		$DealerName=$_POST['DealerName'] ;
	
		$GetDealerID = "SELECT DealerID FROM dealers WHERE DealerName='".$DealerName."'";
	
		$result = $connector->query($GetDealerID);
	
		while ($row = mysql_fetch_array($result)) {
	  		$DealerID =  $row[0];
		}

		$num = mysql_num_rows($result);

		header("location: ViewDealer.php?id=$DealerID");

		mysql_close();
	}

	function getOverDueDealers($connector) {
	//$connector = new DbConnector();
	$connector = new mysqli("ClassifiedRideAd.db.10325553.hostedresource.com", "ClassifiedRideAd", "Fernando1!", "ClassifiedRideAd");

	/* prepare statement */
	if ($stmt = $connector->prepare("SELECT transactions.TransactionDate, dealers.DealerName, dealers.RepName, dealers.MthlyPmt 
		FROM transactions
		INNER JOIN dealers
		ON dealers.DealerID=transactions.DealerID
		WHERE transactions.TransactionDate between date_sub(now(),INTERVAL 30 DAY) and now()")) {
	    $stmt->execute();

	    /* bind variables to prepared statement */
	    $stmt->bind_result($TransactionDate, $DealerName, $RepName, $MthlyPmt);

	    /* fetch values */
	    while ($stmt->fetch()) {
	       echo $TransactionDate . $DealerName . $RepName . $MthlyPmt . "<br /><br />";
	    }

	    /* close statement */
	    $stmt->close();
	}
	/* close connection */
	$connector->close();
}

	//Get All Dealer info for employee view
	$GetAllDealerInfo = mysql_query("SELECT * FROM dealers ");
	$numDealers = mysql_num_rows($GetAllDealerInfo);

	//Get Dealer by Name
	$DealerName= $_POST['search_string'];

	$GetDealerInfo = mysql_query("
		SELECT *
		FROM dealers
		WHERE DealerName='".$DealerName."'");			
		
		while ($row = mysql_fetch_array($GetDealerInfo)) 
			{
				$DealerID = $row['DealerID'];
				$AccountPayFirstName = $row['AccountPayFirstName'];
				$AccountPayLastName = $row['AccountPayLastName'];
				$DealerName = $row['DealerName'];
				$DealerStreet1 = ($row['DealerStreet1']);
				$DealerStreet2 = ($row['DealerStreet2']);
				$DealerCity = ($row['DealerCity']);
				$DealerState = $row['DealerState'];
				$DealerZip = $row['DealerZip'];
				$AccountPayableCell1 = $row['AccountPayableCell1'];
				$AccountPayableCell2 = $row['AccountPayableCell2'];
				$AccountPayableCell3 = $row['AccountPayableCell3'];
				$AccountPayableEmail = $row['AccountPayableEmail'];
				$RepName = $row['RepName'];
				$Program = $row['Program'];
				$MthlyPmt = $row['MthlyPmt'];
				$StartDate = $row['StartDate'];
				$Notes = $row['Notes'];
				$directory = $row['directory'];
				$facebook = $row['facebook'];
				$YouTube = $row['YouTube'];
				$CaBID = $row['CaBID'];
				$SMS = $row['SMS'];	

				if (isset($DealerStreet2)) {
					$DealerAddress = $DealerStreet1 . " " .  $DealerStreet2 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
				}
				else {
					$DealerAddress = $DealerStreet1 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
				}
				$AccountPayableCell= $AccountPayableCell1 . "-" . $AccountPayableCell2 . "-" .  $AccountPayableCell3;
				$Contact=$AccountPayFirstName . " " . $AccountPayLastName;
	}
?>
