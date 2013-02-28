<?php

class dbh extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}

$db = new dbh('ClassifiedRideAd.db.10325553.hostedresource.com', 'ClassifiedRideAd', 'Fernando1!', 'ClassifiedRideAd');

echo 'Success... ' . $db->host_info . "\n";

$db->close();
?>

<?php
require_once 'dbConnector.php';

function getAllDealers($db) {
	//$db = new dbConnector();
	$db = new mysqli("ClassifiedRideAd.db.10325553.hostedresource.com", "ClassifiedRideAd", "Fernando1!", "ClassifiedRideAd");

	if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

	/* prepare statement */
	if ($stmt = $db->prepare("SELECT DealerID, TimeRegistered, RepName, DealerName, DealerStreet1, DealerStreet2, DealerCity, DealerState, DealerZip, DealerCountry, DealerWebsite, Franchise, DealerMainContactFirst, DealerMainContactLast, DealerCellPhone1, DealerCellPhone2, DealerCellPhone3,  DealerOfficePhone1, DealerOfficePhone2, DealerOfficePhone3, OfficePhoneExt, DealerEmail, ContactPosition, AccountPayFirstName, AccountPayLastName, AccountPayableEmail, AccountPayableCell1, AccountPayableCell2, AccountPayableCell3, LeadCell1, LeadCell2, LeadCell3, LeadEmail, DataFeedProvider, OtherDataFeedProvider, DataFeedMainContactFirst, DataFeedMainContactLast, DataFeedMainPhone1, DataFeedMainPhone2, DataFeedMainPhone3, DataFeedMainEmail, UsedCarsInStock, Rep, Program, directory, CaBID, YouTube, SMS, facebook, MthlyPmt, StartDate, Authorization, AgentFirstName, AgentLastName, Signature, DateSigned, DealerUserName, MemberStatus, Notes, Cancelled, LastLogin, LastLoginLocation FROM  dealers")) {
	    $stmt->execute();

	if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
}

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
	$db->close();
}
getAllDealers($db);
?>
