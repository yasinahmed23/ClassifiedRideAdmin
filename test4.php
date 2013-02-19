<?php
require_once 'Functions/dbConnector.php';

function SelDealer($connector) {
		$connector = new DbConnector();
		//$DealerName=$_POST['DealerName'];
		$DealerName="My Dealership";

		$GetInfo = "SELECT DealerID, TimeRegistered, RepName, DealerName, DealerStreet1, DealerStreet2, DealerCity, DealerState, DealerZip, DealerCountry, DealerWebsite, Franchise, DealerMainContactFirst, DealerMainContactLast, DealerCellPhone1, DealerCellPhone2, DealerCellPhone3,  DealerOfficePhone1, DealerOfficePhone2, DealerOfficePhone3, OfficePhoneExt, DealerEmail, ContactPosition, AccountPayFirstName, AccountPayLastName, AccountPayableEmail, AccountPayableCell1, AccountPayableCell2, AccountPayableCell3, LeadCell1, LeadCell2, LeadCell3, LeadEmail, DataFeedProvider, OtherDataFeedProvider, DataFeedMainContactFirst, DataFeedMainContactLast, DataFeedMainPhone1, DataFeedMainPhone2, DataFeedMainPhone3, DataFeedMainEmail, UsedCarsInStock, Rep, Program, directory, CaBID, YouTube, SMS, facebook, MthlyPmt, StartDate, Authorization, AgentFirstName, AgentLastName, Signature, DateSigned, DealerUserName, MemberStatus, Notes, Cancelled, LastLogin, LastLoginLocation FROM dealers WHERE DealerName='$DealerName'";

		$DealerInfo = $connector->query($GetInfo);

		while($query_row = mysql_fetch_assoc($DealerInfo)) 
		   { 
		      foreach($query_row as $key => $value) 
		      { 
			 //echo "$value<br />\n"; 
		      } 
			//echo $query_row[DealerID];
			return $query_row;
			//echo "<br />";
		   } 
			}

$DealerInfo = SelDealer($connector);
//var_dump($DealerInfo);
//echo $DealerInfo;
print_r(array_values($DealerInfo));
?>
