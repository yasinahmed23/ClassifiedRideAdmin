<?php
require_once 'Functions/dbConnector2.php';

function getAllDealers($connector) {
	$connector = new DbConnector();

	/* prepare statement */
	if ($stmt = $connector->prepare("SELECT DealerID, TimeRegistered, RepName, DealerName, DealerStreet1, DealerStreet2, DealerCity, DealerState, DealerZip, DealerCountry, DealerWebsite, Franchise, DealerMainContactFirst, DealerMainContactLast, DealerCellPhone1, DealerCellPhone2, DealerCellPhone3,  DealerOfficePhone1, DealerOfficePhone2, DealerOfficePhone3, OfficePhoneExt, DealerEmail, ContactPosition, AccountPayFirstName, AccountPayLastName, AccountPayableEmail, AccountPayableCell1, AccountPayableCell2, AccountPayableCell3, LeadCell1, LeadCell2, LeadCell3, LeadEmail, DataFeedProvider, OtherDataFeedProvider, DataFeedMainContactFirst, DataFeedMainContactLast, DataFeedMainPhone1, DataFeedMainPhone2, DataFeedMainPhone3, DataFeedMainEmail, UsedCarsInStock, Rep, Program, directory, CaBID, YouTube, SMS, facebook, MthlyPmt, StartDate, Authorization, AgentFirstName, AgentLastName, Signature, DateSigned, DealerUserName, MemberStatus, Notes, Cancelled, LastLogin, LastLoginLocation FROM  dealers")) {
	    $stmt->execute();

	    /* bind variables to prepared statement */
	    $stmt->bind_result($DealerID, $TimeRegistered, $RepName, $DealerName, $DealerStreet1, $DealerStreet2, $DealerCity, $DealerState, $DealerZip, $DealerCountry, $DealerWebsite, $Franchise, $DealerMainContactFirst, $DealerMainContactLast, $DealerCellPhone1, $DealerCellPhone2, $DealerCellPhone3,  $DealerOfficePhone1, $DealerOfficePhone2, $DealerOfficePhone3, $OfficePhoneExt, $DealerEmail, $ContactPosition, $AccountPayFirstName, $AccountPayLastName, $AccountPayableEmail, $AccountPayableCell1, $AccountPayableCell2, $AccountPayableCell3, $LeadCell1, $LeadCell2, $LeadCell3, $LeadEmail, $DataFeedProvider, $OtherDataFeedProvider, $DataFeedMainContactFirst, $DataFeedMainContactLast, $DataFeedMainPhone1, $DataFeedMainPhone2, $DataFeedMainPhone3, $DataFeedMainEmail, $UsedCarsInStock, $Rep, $Program, $directory, $CaBID, $YouTube, $SMS, $facebook, $MthlyPmt, $StartDate, $Authorization, $AgentFirstName, $AgentLastName, $Signature, $DateSigned, $DealerUserName, $MemberStatus, $Notes, $Cancelled, $LastLogin, $LastLoginLocation);

	    /* fetch values */
	    while ($stmt->fetch()) {
	       echo $DealerID . $TimeRegistered . $RepName . $DealerName . $DealerStreet1 . $DealerStreet2 . $DealerCity . $DealerState . $DealerZip . $DealerCountry . $DealerWebsite . $Franchise . $DealerMainContactFirst . $DealerMainContactLast . $DealerCellPhone1 . $DealerCellPhone2 . $DealerCellPhone3 .  $DealerOfficePhone1 . $DealerOfficePhone2 . $DealerOfficePhone3 . $OfficePhoneExt . $DealerEmail . $ContactPosition . $AccountPayFirstName . $AccountPayLastName . $AccountPayableEmail . $AccountPayableCell1 . $AccountPayableCell2 . $AccountPayableCell3 . $LeadCell1 . $LeadCell2 . $LeadCell3 . $LeadEmail . $DataFeedProvider . $OtherDataFeedProvider . $DataFeedMainContactFirst . $DataFeedMainContactLast . $DataFeedMainPhone1 . $DataFeedMainPhone2 . $DataFeedMainPhone3 . $DataFeedMainEmail . $UsedCarsInStock . $Rep . $Program . $directory . $CaBID . $YouTube . $SMS . $facebook . $MthlyPmt . $StartDate . $Authorization . $AgentFirstName . $AgentLastName . $Signature . $DateSigned . $DealerUserName . $MemberStatus . $Notes . $Cancelled . $LastLogin . $LastLoginLocation ;
	    }

	    /* close statement */
	    $stmt->close();
	}
	/* close connection */
	$connector->close();
}
getAllDealers($connector);
?>
