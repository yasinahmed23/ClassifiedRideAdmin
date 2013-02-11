<table cellpadding="0" cellspacing="0" border="0" width="900" align="center" >
	<tr>
		<td align="center" width="100"><strong>Date/Time</strong></td>		
		<td align="center" width="75"><strong>Trans ID</strong></td>				
		<td align="center" width="120"><strong>Dealership</td>
		<td align="center" width="75"><strong>Registered</td>
		<td align="center" width="75"><strong>Renewed</td>
		<td align="center" width="150"><strong>Employee</strong></td>
		<td align="center" width="75"><strong>Commission</td>
		<td align="center" width="150"><strong>Manager</td>
		<td align="center" width="75"><strong>Referral</td>
	</tr>
</table>
<div id="referral">
<table cellpadding="0" cellspacing="0" border="0" width="900" align="center" >
	<?php
	while ($row = mysql_fetch_array($GetTransactions)) {
		$TransactionDate = $row['TransactionDate'];
		$TransactionID = $row['TransactionID'];
		$eID = $row['eID'];
		$employee = ($row['employee']);
		$DealerID = $row['DealerID'];
		$DealerName = $row['DealerName'];
		$member = $row['member'];
		$registered = $row['registered'];
		$EmplReferral = $row['EmplReferral'];
		$Renewed = $row['Renewed'];
		$Commission = $row['Commission'];
		$ReferralAmount = $row['ReferralAmount'];
	?>
	<tr valign='top'>
		<td colspan='11' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center" width="100"><p><?php echo $TransactionDate;?></p></td>		
		<td align="center" width="75"><p><?php echo $TransactionID;?></p></td>
		<td align="center" width="120"><p>
		<?php 
		//Get Employee Referal's Email
			$GetDealerEmail = mysql_query("
				SELECT DealerEmail 	
				FROM dealers
				WHERE DealerName ='".$DealerName."' ");
			while ($row = mysql_fetch_array($GetDealerEmail)) {
				$DealerEmail = $row['DealerEmail'];
				}
		echo "<p><a href='mailto:$DealerEmail'>" . $DealerName . "</a></p>";
		?>
		</p></td>
		<td align="center" width="75"><p>
			<?php			
			if (empty($registered)) {
    				echo "----";
			} else {
    				echo "$" . $registered;
			}

			?></p></td>		
		<td align="center" width="75"><p>
		<?php			
		if (empty($Renewed)) {
			echo "----";
		} else {
			echo "$" . $Renewed;
		}

		?></p></td>
		
		<td align="center" width="150">
		<?php 
		//Get Dealer Rep's Email
			$GetRepsEmail = mysql_query("
				SELECT EmplEmail 	
				FROM employees 
				WHERE employee ='".$employee."' ");
			while ($row = mysql_fetch_array($GetRepsEmail)) {
				$EmplEmail = $row['EmplEmail'];
				}
		echo "<p><a href='mailto:$EmplEmail'>" . $employee . "</a></p>";
		?>
		</td>
		<td align="center" width="75"><p>
			<?php			
			if (empty($Commission)) {
    				echo "";
			} else {
    				echo "$" . $Commission;
			}
			?>
			</p>
		</td>
		<td align="center" width="150">
		<?php 
		//Get Employee Referal's Email
			$GetRefEmail = mysql_query("
				SELECT EmplEmail 	
				FROM employees 
				WHERE employee ='".$EmplReferral."' ");
			while ($row = mysql_fetch_array($GetRefEmail)) {
				$EmplEmail = $row['EmplEmail'];
				}
		echo "<p><a href='mailto:$EmplEmail'>" . $EmplReferral . "</a></p>";
		?>
		</td>
		<td align="center" width="75">
		<?php			
		if (empty($ReferralAmount)) {
			echo "----" ;
		} else {
			echo "$" . $ReferralAmount;
		}
		?>
	</td>
	</tr>
	<?php } 
	?>
</table>
</div>
