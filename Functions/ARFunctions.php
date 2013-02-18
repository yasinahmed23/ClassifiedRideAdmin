<?php
	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

	function getTime($connector) {
		$connector = new DbConnector();
		if (!$connector) {
			die('Could not connect');
		}
	date_default_timezone_set('America/Chicago');
	$date = date('m/d/Y h:i:s a', time());
	}

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

	//Get All Dealer info for employee view
	//$GetAllDealerInfo = mysql_query("SELECT * FROM dealers ");
	//$numDealers = mysql_num_rows($GetAllDealerInfo);

	//Get Dealer by Name
	$DealerName= $_POST['search_string'];

	

	/*$GetDealerInfo = mysql_query("
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
	}*/

	//Get Dealer ID

	//Turn Directory ON
	function DirectoryOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetOn = "UPDATE dealers SET directory='directoryON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt+99;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}

	//Turn Directory OFF
	function DirectoryOFF($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetDeclined = "UPDATE dealers SET directory='DirectoryDeclined' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetDeclined);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt-99;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}

	//Turn Facebook OFF
	function FaceBookOFF($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetDeclined = "UPDATE dealers SET facebook='FacebookDeclined' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetDeclined);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt-1490;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}

	//Turn Facebook ON
	function FaceBookOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetOn = "UPDATE dealers SET facebook='facebookON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt+1490;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}


	//Turn YouTube OFF
	function YouTubeOFF($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetDeclined = "UPDATE dealers SET YouTube='YouTubeDeclined' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetDeclined);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt-199;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}

	//Turn YouTube ON
	function YouTubeOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetOn = "UPDATE dealers SET YouTube='YouTubeON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt+199;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}
			
	//Turn SMS ON
	function SMSOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetOn = "UPDATE dealers SET SMS='SMSON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt+990;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}


	//Turn SMS OFF
	function SMSOff($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetDeclined = "UPDATE dealers SET SMS='SMSDeclined' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetDeclined);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt-990;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}


	//Turn Cabid OFF
	function CabidOff($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetDeclined = "UPDATE dealers SET CaBID='CaBIDDeclined'WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetDeclined);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt-399;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}

	//Turn Cabid ON
	function CabidOn($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetOn = "UPDATE dealers SET CaBID='CaBIDON' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetOn);

		$GetPmt = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";	
	
		$Pmt = $connector->query($GetPmt);

		while ($row = mysql_fetch_array($Pmt)) {
	  		$MthlyPmt = $row[0];
		}
	
		$MthlyPmt=$MthlyPmt+399;

		$UpdatePmt = "UPDATE dealers SET MthlyPmt=$MthlyPmt WHERE DealerName='$DealerName'";
	
		$SetPmt = $connector->query($UpdatePmt);
	}

	//Set Dealer Inactive
	function dealerInactive($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$setInactive = "UPDATE dealers SET MemberStatus=INACTIVE WHERE DealerName='$DealerName'";
	
		$result = $connector->query($setInactive);
	}

	//Set Cancelled Date
	function dealerCancelDate($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		$SetCancelledDate = "UPDATE  dealers SET Cancelled='$date' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetCancelledDate);
	}

	//Set Restore Date
	function dealerRestoreDate($connector) {
		$connector = new DbConnector();
		$DealerName=$_POST['DealerName'] ;
		
		date_default_timezone_set('America/Chicago');
		$date = date('m/d/Y h:i:s a', time());

		$SetRestoreDate = "UPDATE  dealers SET Restored='$date' WHERE DealerName='$DealerName'";
	
		$result = $connector->query($SetRestoreDate);
	}

	//Get Dealer's Page
	function getDealerPage($connector) {
		$connector = new DbConnector();
		if (!$connector) {
			die('Could not connect');
		}
	
		$DealerName= "My Dealership";
	
		$GetDealerID = "SELECT DealerID FROM dealers WHERE DealerName='".$DealerName."'";
	
		$result = $connector->query($GetDealerID);
	
		while ($row = mysql_fetch_array($result)) {
	  		$DealerID =  $row[0];
		}

		$num = mysql_num_rows($result);

		header("location: ViewDealer.php?id=$DealerID");

		mysql_close();
	}
?>
