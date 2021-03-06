
<?php
//Used By /Dealer_List.php
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

	echo "<table cellpadding='5' cellspacing='0' border='0' align='center' width='100%'>
	<tr>
		<td align='center' width='20'>&nbsp;</td>		
		<td align='center' width='80'><strong>Start Date</strong></td>				
		<td align='center' width='170'><strong>Name</strong></td>	
		<td align='center' width='150'><strong>Location</strong></td>		
		<td align='center' width='170'><strong>Representative</td>
		<td align='center' width='110'><strong>Program</td>
		<td align='center' width='150'><strong>Monthly Payment</td>
	</tr>
</table>
		<div id='referral'>
		<table cellpadding='5' cellspacing='0' border='0' align='center' width='100%'>";
	$Count=1;
	while($stmt->fetch()) {
		$Location = $DealerCity . ",&nbsp;" . $DealerState;
	echo "<tr valign='top'>
		<td colspan='7' align='center'><hr /></td>
	</tr>
	<tr>
		<td align='center' width='20'>" . $Count . "</td>	
		<td align='center' width='80'>";
			if ($StartDate!="") {
				echo $StartDate;
			}
			else {
				echo "<font color='red' size='-2'>Start Date Not Set Yet</font>";
			}
		echo "</td>
		<td align='center' width='170'>" . $DealerName . "</td>	
		<td align='center' width='150'>" . $Location . "	</td>		
		<td align='center' width='170'>";

		//Get Dealer Rep's Email
		$GetRepsEmail = mysql_query("
			SELECT EmplEmail 	
			FROM employees 
			WHERE employee ='".$RepName."' ");

		while ($row = mysql_fetch_array($GetRepsEmail)) {
			$EmplEmail = $row['EmplEmail'];
			}		
		echo "<p><a href='mailto:$EmplEmail'>" . $RepName . "</a></p>";
		echo "</td>
		<td align='center' width='110'>$" . number_format($Program) . "</td>
		<td align='center' width='150'>$" . number_format($MthlyPmt, 2) . "</td>
	
	</tr>";
	$Count++;
	}
	echo "</div></table>";
}
?>
