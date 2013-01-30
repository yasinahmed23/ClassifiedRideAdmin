<table cellpadding="5" cellspacing="0" border="0" align="center" width="850">
	<tr>
		<td align="center"><strong>Date/Time</strong></td>		
		<td align="center"><strong>Trans ID</strong></td>				
		<td align="center"><strong>Dealership</td>
		<td align="center"><strong>Registered</td>
		<td align="center"><strong>Renewed</td>
		<td align="center"><strong>Employee</strong></td>
		<td align="center"><strong>Commission</td>
		<td align="center"><strong>Manager</td>
		<td align="center"><strong>Referral</td>
	</tr>
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
		<td align="center"><p><?php echo $TransactionDate;?></p></td>		
		<td align="center"><p><?php echo $TransactionID;?></p></td>
		<td align="center"><p>
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
		<td align="center"><p>
			<?php			
			if (empty($registered)) {
    				echo "----";
			} else {
    				echo "$" . $registered;
			}

			?></p></td>		
		<td align="center"><p>
		<?php			
		if (empty($Renewed)) {
			echo "----";
		} else {
			echo "$" . $Renewed;
		}

		?></p></td>
		
		<td align="center" width="75">
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
		<td align="center"><p>
			<?php			
			if (empty($Commission)) {
    				echo "";
			} else {
    				echo "$" . $Commission;
			}
			?>
			</p>
		</td>
		<td align="center" width="75">
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
		<td align="center">
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

