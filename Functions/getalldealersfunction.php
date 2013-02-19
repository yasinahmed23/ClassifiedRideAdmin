
<?php
include("dbConnector.php");

function getDealers($connector) {
	include("dbConnector2.php");
	
	$sql = "SELECT DealerID, TimeRegistered, RepName, DealerName, DealerStreet1, DealerStreet2, DealerCity, DealerState, DealerZip, DealerCountry, DealerWebsite, Franchise, DealerMainContactFirst, DealerMainContactLast, DealerCellPhone1, DealerCellPhone2, DealerCellPhone3,  DealerOfficePhone1, DealerOfficePhone2, DealerOfficePhone3, OfficePhoneExt, DealerEmail, ContactPosition, AccountPayFirstName, AccountPayLastName, AccountPayableEmail, AccountPayableCell1, AccountPayableCell2, AccountPayableCell3, LeadCell1, LeadCell2, LeadCell3, LeadEmail, DataFeedProvider, OtherDataFeedProvider, DataFeedMainContactFirst, DataFeedMainContactLast, DataFeedMainPhone1, DataFeedMainPhone2, DataFeedMainPhone3, DataFeedMainEmail, UsedCarsInStock, Rep, Program, directory, CaBID, YouTube, SMS, facebook, MthlyPmt, StartDate, Authorization, AgentFirstName, AgentLastName, Signature, DateSigned, DealerUserName, MemberStatus, Notes, Cancelled, LastLogin, LastLoginLocation FROM dealers";

	//Prepare
	$stmt = $db_conn->prepare($sql);

	//Execute= 
	$stmt->execute();

	$stmt->bindColumn(1, $DealerID);
	$stmt->bindColumn(2, $TimeRegistered);
	$stmt->bindColumn(3, $RepName);
	$stmt->bindColumn(4, $DealerName);
	$stmt->bindColumn(5, $DealerStreet1);
	$stmt->bindColumn(6, $DealerStreet2);
	$stmt->bindColumn(7, $DealerCity);
	$stmt->bindColumn(8, $DealerState);
	$stmt->bindColumn(9, $DealerZip);
	$stmt->bindColumn(10, $DealerCountry);
	$stmt->bindColumn(11, $DealerWebsite);
	$stmt->bindColumn(12, $Franchise);
	$stmt->bindColumn(13, $DealerMainContactFirst);
	$stmt->bindColumn(14, $DealerMainContactLast);
	$stmt->bindColumn(15, $DealerCellPhone1);
	$stmt->bindColumn(16, $DealerCellPhone2);
	$stmt->bindColumn(17, $DealerCellPhone3);
	$stmt->bindColumn(18, $DealerOfficePhone1);
	$stmt->bindColumn(19, $DealerOfficePhone2);
	$stmt->bindColumn(20, $DealerOfficePhone3);
	$stmt->bindColumn(21, $OfficePhoneExt);
	$stmt->bindColumn(22, $DealerEmail);
	$stmt->bindColumn(23, $ContactPosition);
	$stmt->bindColumn(24, $AccountPayFirstName);
	$stmt->bindColumn(25, $AccountPayLastName);
	$stmt->bindColumn(26, $AccountPayableEmail);
	$stmt->bindColumn(27, $AccountPayableCell1);
	$stmt->bindColumn(28, $AccountPayableCell2);
	$stmt->bindColumn(29, $AccountPayableCell3);
	$stmt->bindColumn(30, $LeadCell1);
	$stmt->bindColumn(31, $LeadCell2);
	$stmt->bindColumn(32, $LeadCell3);
	$stmt->bindColumn(33, $LeadEmail);
	$stmt->bindColumn(34, $DataFeedProvider);
	$stmt->bindColumn(35, $OtherDataFeedProvider);
	$stmt->bindColumn(36, $DataFeedMainContactFirst);
	$stmt->bindColumn(37, $DataFeedMainContactLast);
	$stmt->bindColumn(38, $DataFeedMainPhone1);
	$stmt->bindColumn(39, $DataFeedMainPhone2);
	$stmt->bindColumn(40, $DataFeedMainPhone3); 	
	$stmt->bindColumn(41, $DataFeedMainEmail);
	$stmt->bindColumn(42, $UsedCarsInStock);
	$stmt->bindColumn(43, $Rep);
	$stmt->bindColumn(44, $Program);
	$stmt->bindColumn(45, $directory);
	$stmt->bindColumn(46, $CaBID);
	$stmt->bindColumn(47, $YouTube);
	$stmt->bindColumn(48, $SMS);
	$stmt->bindColumn(49, $facebook);
	$stmt->bindColumn(50, $MthlyPmt);
	$stmt->bindColumn(51, $StartDate);
	$stmt->bindColumn(52, $Authorization);
	$stmt->bindColumn(53, $AgentFirstName);
	$stmt->bindColumn(54, $AgentLastName);
	$stmt->bindColumn(55, $Signature);
	$stmt->bindColumn(56, $DealerUserName);
	$stmt->bindColumn(57, $MemberStatus);
	$stmt->bindColumn(58, $Notes);
	$stmt->bindColumn(59, $Cancelled);
	$stmt->bindColumn(60, $LastLogin);
	$stmt->bindColumn(61, $LastLoginLocation);
	
	while($stmt->fetch()) {
		echo "$DealerName, $Program, $MthlyPmt <br/>";
	}

	/*$result = $stmt->fetchAll();

	//Count # found and print results
	$num_rows = count($result);
	print_r($num_rows);
	echo "&nbsp; dealer found<br /><br />";

	//Print Results of query
	print_r($result);*/
	
}
getDealers($connector);
?>


	
