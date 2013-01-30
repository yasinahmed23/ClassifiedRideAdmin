<?php
	$DealerUser = $_SESSION['DealerUser'];

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
	}

	//Get Rep Info for Dealer Usere 
	$GetRepInfo = mysql_query("
		SELECT EmplCellPhone1, EmplCellPhone2, EmplCellPhone3, EmplEmail, pic
		FROM employees	
		WHERE employee = '$RepName'");
?>
