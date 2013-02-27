<table cellpadding="0" cellspacing="0" border="0" align="center" width="860">
	<tr>
		<td align="center" width="10">&nbsp;</td>		
		<td align="center" width="130"><strong>Dealership</strong></td>				
		<td align="center" width="100"><strong>Rep</strong></td>
		<td align="center" width="80"><strong>Monthly Bill</strong></td>
		<td align="center" width="150"><strong>Due Date</strong></td>
		<td align="center" width="120"><strong>Last Payment</strong></td>
		<td align="center" width="270"><strong>Notes</strong></td>
	</tr>
</table>
<div id="referral">
<?php
//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM dealers
	ORDER BY DealerID DESC");
$CountDealers=0;
while ($row = mysql_fetch_array($sql)) {
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
	$MthlyPmt = number_format($row['MthlyPmt'], 2);
	$StartDate = $row['StartDate'];
	$Notes = $row['Notes'];
	$MemberStatus = $row['MemberStatus'];
	$CountDealers++;

	if (isset($DealerStreet2)) {
	$DealerAddress = $DealerStreet1 . " " .  $DealerStreet2 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
	}
	else {
	$DealerAddress = $DealerStreet1 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
	}
	
	$AccountPayableCell= $AccountPayableCell1 . "-" . $AccountPayableCell2 . "-" .  $AccountPayableCell3;

	$Contact=$AccountPayFirstName . " " . $AccountPayLastName;

	if ($MemberStatus=="INACTIVE") {
		$fontColor="#666666";			
		
	} 
	else {
		$fontColor="#000000";
	}
?>
	
<!--Disply Dealers from database into a table -->
<table cellpadding="0" cellspacing="0" border="0" align="center" width="860">
	<tr valign='top'>
		<td colspan='7' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center" width="10"><font color="<?php echo $fontColor; ?>"><?php echo $CountDealers;?></font></td>		
		<td align="center" width="130"><p><a href="/AccountsReceivable/ViewDealer.php?id=<?php echo $DealerID; ?>"><font color="<?php echo $fontColor; ?>"><?php echo $DealerName;?></font></a></p></td>
		<td align="center" width="100"><font color="<?php echo $fontColor; ?>">
			<?php 
				//Get Dealer Rep's Email
				$GetRepsEmail = mysql_query("
					SELECT EmplEmail 	
					FROM employees 
					WHERE employee ='".$RepName."' ");

				while ($row = mysql_fetch_array($GetRepsEmail)) {
					$EmplEmail = $row['EmplEmail'];
					}		
				echo "<p><a href='mailto:$EmplEmail'><font color='" . $fontColor . "'>" . $RepName . "</font></a></p>";
				
			?>
		</font></td>
		<td align="center" width="80"><font color="<?php echo $fontColor; ?>"><?php echo "$" . $MthlyPmt;?></font></td>
		<td align="center" width="150"><font color="<?php echo $fontColor; ?>">
			<?php 
				if ($StartDate==null) {
					echo "<font color='red'>Start Date has not been set.</font>";
				}
				else {
					$start  = strpos($StartDate, '/');
					$end    = strpos($StartDate, '/', $start + 1);
					$length = $end - $start;
					$DateDue = substr($StartDate, $start + 1, $length - 1);
					echo $DateDue;
				}
				?>
		</font></td>
		<td align="center" width="120"><font color="<?php echo $fontColor; ?>">
			<?php
			$GetLastTransDate = mysql_query("
					SELECT TransactionDate	
					FROM transactions
					WHERE DealerID='$DealerID'
					ORDER BY TransactionDate DESC
					LIMIT 1");

				while ($row = mysql_fetch_array($GetLastTransDate)) {
					$TransactionDate = $row['TransactionDate'];
					}	
				if ($TransactionDate==null) {
					echo "<font color='red'>No Payments have been recorded.</font>";
				}
				else {	
					echo "<p><font color='" . $fontColor . "'>" . $TransactionDate . "</font></p>";
				}
			?>		
		</font></td>
		<td align="center" width="270"><font color="<?php echo $fontColor; ?>"><?php echo $Notes; ?></font></td>
	</tr>
<?php } 
?>
</table>
</div>	
<p align='center'><font color="<?php echo $fontColor; ?>"><em>*Grey indicated the Dealership status is Inactive</em></font></p>	
