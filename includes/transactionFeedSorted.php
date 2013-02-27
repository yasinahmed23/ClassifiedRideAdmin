<table cellpadding="0" cellspacing="0" border="0" width="900" align="center" >
	<tr>
		<td align="center" width="100"><strong>Date/Time</strong></td>		
		<td align="center" width="120"><strong>Dealership</strong></td>
		<td align="center" width="150"><strong>Type</strong></td>
		<td align="center" width="75"><strong>Amount</strong></td>
		<td align="center" width="150"><strong>Employee</strong></td>
		<td align="center" width="75"><strong>Commission</strong></td>
		<td align="center" width="150"><strong>Manager</strong></td>
		<td align="center" width="75"><strong>Referral</strong></td>
	</tr>
	<?php
	//Display 10 newest posts
	$GetTransactions = mysql_query("
		SELECT *
		FROM transactions 
		where TransactionDate between date_sub(now(),INTERVAL '$numdays' DAY) and now()
		ORDER BY TransactionID DESC");

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
				if ($registered>0) {
	    				echo "Registration";
					$amount = "$" . number_format($registered, 2);
				} else if ($Renewed>0) {
	    				echo "Renewal";
					$amount = "$" . number_format($Renewed, 2);
				}
				?></p></td>		
		<td align="center"><p>
		<?php			
			echo $amount;
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

