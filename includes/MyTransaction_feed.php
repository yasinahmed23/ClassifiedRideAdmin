<div id="MyTrans">
<?php 
	//Check to see if any transactions exist by employeeID if so, proceed
	if ( mysql_num_rows( $GetTrans ) == 0 ){
		echo "<p align='center'><em>Once you start signing dealerships, you can view them here</em></p>"; 
	}
	else {
	?>
	<font size="-2"><?php echo $employee; ?> 's Transactions</font>
	<table cellpadding="5" cellspacing="0" border="0" width="530" class="table">
		<tr valign="top">
			<td>
				<table cellpadding="0" cellspacing="0" border="0" align="center" width="440">
					<tr valign="top">
						<td width="10" align="right">&nbsp;</td>
						<td align="center" width="100"><strong>Trans Date</strong></td>		
						<td align="center" width="100"><strong>Dealer</strong></td>		
						<td align="center" width="130"><strong>Type</strong></td>
						<td align="center" width="100"><strong>Commission</strong></td>
					</tr>
				</table>
				<div id="MyTransFeed">
				<table cellpadding="0" cellspacing="0" border="0" align="center" width="440">
					<?php
					$CountTrans=0;
					while ($row = mysql_fetch_array($GetTrans)) 
					{
						$TransactionDate = $row['TransactionDate'];
						$TransactionID = $row['TransactionID'];
						$DealerName = $row['DealerName'];
						$EmplReferral = $row['EmplReferral'];
						$Commission = $row['Commission'];
						$employee = $row['employee'];
						$Type = $row['member'];
						$CountTrans++;
					?>
					<!--Disply data from database into a table -->
					<tr valign="top">
						<td colspan="6" align="center"><hr /></td>
					</tr>							
					<tr valign="top">
						
						<td align="center" width="10"><p><?php echo $CountTrans . ")";?></p></td>
						<td align="center" width="100"><p><?php echo $TransactionDate;?></p></td>			
						<td align="center" width="100"><p><?php echo $DealerName;?></p></td>
						<td align="center" width="130"><p><?php echo $Type;?></p></td>
						<td align="center" width="100"><p>
							<?php			
							if (empty($Commission)) {
				    				echo "";
							} else {
				    				echo "$" . number_format($Commission, 2);
							}

							?>
						</p></td> 
					</tr>
					<?php } 
					?>
				</table>
				</div>
			</td>
		</tr>
	</table>

<table align="center">
	<tr>
		<td>
		<?php 
		echo "<p align='center'><font size='-2'>Total from Registration (" . $num_Regs . "):  $" . number_format($RegCommissionTotal['total'], 2) . "<br />Total From Renewals (" . $num_Renewals . "):  $" . number_format($RenewCommissionTotal['total'], 2) . "<br /><strong>TOTAL COMMISSION EARNED FROM MY DEALERSHIPS  : $" . number_format($CommTOTAL, 2) . "</strong></font></p>";
		?></strong></font></p>
		</td>
	</tr>
</table>
<?php } ?>
</div>
<div id="Referrals">
	<?php 
	//Check to see if rep has hired any employees and if so, check if they have signed any dealerships
	if ( mysql_num_rows( $GetMyReferrals ) == 0 ){
		echo "<p align='center'><em>Once you hire someone, you can view them here</em></p>"; 
	}
	else {
	?>
	<font size="-2">People that <?php echo $EmplFirstName; ?> has hired.</font>	
	<table border="0" cellspacing="0" cellpadding="5" class="table" width="380" align="right">
		<tr valign="top">
			<td>
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="350">
					<tr valign="top">
						<td width="20" align="left">&nbsp;</td>
						<td align="center" width="220"><strong>Name</strong></td>
						<td align="center" width="110"><strong>Total Residuals</strong></td>
					</tr>
				</table>
				<div id="MyTransFeed">
				<table border="0" cellpadding="0" cellspacing="0" align="center" width="350">
					<?php
					$GetMyReferrals = mysql_query("
					SELECT *
					FROM  Referrals	
					WHERE  EmployeeName ='".$employee."'
					ORDER BY NewEmplName ASC");

					$CountNumManaged=0;
					while ($row = mysql_fetch_array($GetMyReferrals)) 
						{
							$NewEmplName = $row['NewEmplName'];
							$NewEmpEmail = $row['NewEmpEmail'];
							$CountNumManaged++;
					?>					
					<tr valign="top">
						<td colspan="3" align="center"><hr /></td>
					</tr>
					<tr valign="top">
						<td width="20" align="right"><p><?php echo $CountNumManaged . ")&nbsp;"; ?></p></td>
						<td width="220">
							<?php
							$GetNumDealers = mysql_query("
							SELECT RepName
							FROM dealers
							WHERE  RepName ='".$NewEmplName."'");

							$num_DealersReferred = mysql_num_rows($GetNumDealers);
							

							$GetNumHired = mysql_query("
							SELECT EmployeeName
							FROM Referrals
							WHERE EmployeeName ='".$NewEmplName."'");

							$num_HiredByReferral = mysql_num_rows($GetNumHired);
							?>
							<p><a href="mailto:<?php echo $NewEmpEmail; ?>"><?php echo $NewEmplName;?></a> <br />(signed <?php echo $num_DealersReferred . " Dealers and hired " . $num_HiredByReferral . " ppl)";?></p>
						</td>
						<td align="center" width="110">
							<?php
							$GetRefComm = mysql_query("
							SELECT SUM(ReferralAmount) 
							AS total FROM transactions
							WHERE  employee ='".$NewEmplName."'");
			
							$RefCommissionTotal = mysql_fetch_assoc($GetRefComm);	
							if ($RefCommissionTotal['total'] == 0) {
								echo "----";
							}
							else {
							echo "<p>$" . number_format($RefCommissionTotal['total'], 2) . " </p>";
							}
							?>
						</td>
					</tr>
							<?php } ?>
				</table>
				</div>
			</td>
		</tr>
	</table>
	
<table align="center">
	<tr>
		<td>
		<?php
		echo "<p align='center'><font size='-2'><strong>TOTAL RESIDUALS EARNED FROM BEING A MANAGER: $" . number_format($RefCommTotal['total'], 2) . "</strong></font></p>";
		?>
		</td>
	</tr>
</table>
<?php } ?>
</div>
