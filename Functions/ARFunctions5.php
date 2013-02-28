
<?php
include("dbConnector.php");

function getDealerInfo($connector) {
	include("dbConnector2.php");
	
	
	$sql = "SELECT DealerID, TimeRegistered, RepName, DealerName, DealerStreet1, DealerStreet2, DealerCity, DealerState, DealerZip, DealerCountry, DealerWebsite, Franchise, DealerMainContactFirst, DealerMainContactLast, DealerCellPhone1, DealerCellPhone2, DealerCellPhone3,  DealerOfficePhone1, DealerOfficePhone2, DealerOfficePhone3, OfficePhoneExt, DealerEmail, ContactPosition, AccountPayFirstName, AccountPayLastName, AccountPayableEmail, AccountPayableCell1, AccountPayableCell2, AccountPayableCell3, LeadCell1, LeadCell2, LeadCell3, LeadEmail, DataFeedProvider, OtherDataFeedProvider, DataFeedMainContactFirst, DataFeedMainContactLast, DataFeedMainPhone1, DataFeedMainPhone2, DataFeedMainPhone3, DataFeedMainEmail, UsedCarsInStock, Rep, Program, directory, CaBID, YouTube, SMS, facebook, MthlyPmt, StartDate, Authorization, AgentFirstName, AgentLastName, Signature, DateSigned, DealerUserName, MemberStatus, Notes, Cancelled, LastLogin, LastLoginLocation FROM dealers";

	//Prepare
	$stmt = $db_conn->prepare($sql);

	//Execute= 
	$DealerUser = 'MyDealer1';
	$stmt ->execute();

	$result = $stmt->fetchAll();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	//Print Results
	$num_rows = count($result);
	print_r($num_rows);
	echo "&nbsp; dealer found";
	echo "<br /><br />";
	print_r($result);
	
}
getDealerInfo($connector);
?>


	
