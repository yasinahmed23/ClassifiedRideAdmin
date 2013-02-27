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
		$registered = number_format($registered, 2);
		$EmplReferral = $row['EmplReferral'];
		$Renewed = $row['Renewed'];
		$Renewed = number_format($Renewed, 2);
		$Commission = $row['Commission'];
		$Commission = number_format($Commission, 2);
		$ReferralAmount = $row['ReferralAmount'];
	?>
	<tr valign='top'>
		<td colspan='11' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center" width="100"><p><?php echo $TransactionDate;?></p></td>		
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
		<td align="center" width="150"><p>
			<?php			
			if ($registered>0) {
    				echo "Registration";
				$amount = "$" . $registered;
			} else if ($Renewed>0) {
    				echo "Renewal";
				$amount = "$" . $Renewed;
			}
			?></p></td>		
		<td align="center" width="75"><p>
		<?php			
			echo $amount;
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
