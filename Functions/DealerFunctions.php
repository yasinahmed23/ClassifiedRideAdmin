<?php
	$DealerUser = $_SESSION['DealerUser'];

	date_default_timezone_set('America/Chicago');
	$date = date('m/d/Y h:i:s a', time());

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

	$GetDealerInfo = mysql_query("
		SELECT *
		FROM dealers
		WHERE DealerUserName='$DealerUser'");

	while ($row = mysql_fetch_array($GetDealerInfo)) 
	{
	$directory = $row['directory'];
		$facebook = $row['facebook'];
		$YouTube = $row['YouTube'];
		$CaBID = $row['CaBID'];
		$SMS = $row['SMS'];

		$DealerID = $row['DealerID'];
		$TimeRegistered = $row['TimeRegistered'];
		$DealerName = $row['DealerName'];
		$DealerCity = ($row['DealerCity']);
		$DealerState = $row['DealerState'];
		$DealerEmail = $row['DealerEmail'];
		$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
		$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
		$RepName = $row['RepName'];
		$Program = $row['Program'];
		$MemberStatus = $row['MemberStatus'];
		$LastLogin = $row['LastLogin'];
		$LastLoginLocation = $row['LastLoginLocation'];
	}

	//Get Rep Info for Dealer User 
	$GetRepInfo = mysql_query("
		SELECT EmplCellPhone1, EmplCellPhone2, EmplCellPhone3, EmplEmail, pic
		FROM employees	
		WHERE employee = '$RepName'");
?>
