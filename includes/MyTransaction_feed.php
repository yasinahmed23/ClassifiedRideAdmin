<?php
	//Get Employee ID from Username
		$GetEmployeeID = mysql_query("
			SELECT employeeID
			FROM  employees
			WHERE EmplUserName='$user'");

		while ($row = mysql_fetch_array($GetEmployeeID)) {
			$employeeID = $row['employeeID'];
		}
	
	//Get Employee Name from Username
	$GetEmployeeName = mysql_query("
		SELECT employee
		FROM  employees
		WHERE EmplUserName='$user'");

	while ($row = mysql_fetch_array($GetEmployeeName)) {
		$employee = $row['employee'];
	}
?>
	<div id="DownloadFiles">
	<?php 
		 
		$user = $_SESSION['user'];
	
		//Check to see if any transactions exist by employeeID if so, proceed
		$sql = mysql_query("
			SELECT *
			FROM  transactions	
			WHERE eID='".$employeeID."'");

		if ( mysql_num_rows( $sql ) == 0 ){
			echo "<center><font color='#FF0000'><strong>You have not signed any dealerships yet!</strong></font></center>"; 
		}
		else {
				
		?>
		
			
			<font size="-2"><?php echo $employee; ?> 's Transactions</font>
			<table cellpadding="10" cellspacing="0" border="0" width="440" class="table">
				<tr valign="top">
					<td>
						<table cellpadding="0" cellspacing="0" border="0" align="center">
							<tr valign="top">
								<td align="center"><strong>Trans Date</strong></td>		
								<td align="center"><strong>Trans ID</strong></td>
								<td align="center"><strong>Dealer</strong></td>		
								<td align="center"><strong>Commission</td>
							</tr>
							<?php
							while ($row = mysql_fetch_array($sql)) 
							{
								$TransactionDate = $row['TransactionDate'];
								$TransactionID = $row['TransactionID'];
								$DealerName = $row['DealerName'];
								$EmplReferral = $row['EmplReferral'];
								$Commission = $row['Commission'];
								$employee = $row['employee'];
							?>
							<!--Disply data from database into a table -->
							<tr valign="top">
								<td colspan="4" align="center"><hr /></td>
					</tr>							
							<tr valign="top">
	
								<td align="center"><?php echo $TransactionDate?></td>		
								<td align="center"><?php echo $TransactionID;?></td>		
								<td align="center"><?php echo $DealerName;?></td>
								<td align="center">
									<?php			
									if (empty($Commission)) {
						    				echo "";
									} else {
						    				echo "$" . $Commission;
									}

									?>
								</td>
						
							</tr>
							<?php } 
							?>
						</table>
					</td>
				</tr>
			</table>
			<?php } ?>
		</div>
		
	
		
		<div id="Referrals">
			<?php 
			//Check to see if rep has hired any employees and if so, check if they have signed any dealerships
			
			if ( mysql_num_rows( $sql ) == 0 ){
				echo "<font color='#FF0000'><strong>You have not hired any employees!</strong></font>"; 
			}
			else {
			?>
			<font size="-2">People that <?php echo $employee; ?> has hired	and # of Dealers that person signed</font>	
			<table border="0" cellspacing="0" cellpadding="10" class="table" width="360">
				<tr valign="top">
					<td>
						<table border="0" cellpadding="0" cellspacing="0" align="center">
							<tr valign="top">
								<td align="center"><strong>Name</strong></td>
								<td align="center"><strong>Email</strong></td>
								<td align="center"><strong># Dealers</strong></td>
							</tr>
							<?php
							$sql = mysql_query("
							SELECT *
							FROM  Referrals	
							WHERE  EmployeeName ='".$employee."'
							ORDER BY NewEmplName ASC
							");

							while ($row = mysql_fetch_array($sql)) 
								{
									$NewEmplName = $row['NewEmplName'];
									$NewEmpEmail = $row['NewEmpEmail'];
						?>					<tr valign="top">
						<td colspan="3" align="center"><hr /></td>
					</tr>
					<tr valign="top">
						<td align="center"><?php echo $NewEmplName?></td>
						<td align="center">
							<a href="mailto:
								<?php echo $NewEmpEmail; ?>">
								<?php echo $NewEmpEmail;?>
							</a>
						</td>
						<td align="center">
							<?php
							$GetNumDealers = mysql_query("
							SELECT RepName
							FROM dealers
							WHERE  RepName ='".$NewEmplName."'
							");
					
							$num_rows = mysql_num_rows($GetNumDealers);
						
							echo $num_rows;
							?>

						</td>
					</tr>
							<?php } ?>
						</td>
					</tr>
						</table>
					</td>
				</tr>
			</table>
		<?php } ?>	
	</div>
