<table width='900' cellpadding='0' cellspacing='0' align='center'>
				<tr valign='top'>
					<td align='center'>		
					<p><strong>Accounts Receivable</strong></p>
					</td>
				</tr>
			</table>
<table cellpadding="5" cellspacing="0" border="0" align="center" width="900">
	<tr>
		<td align="center">&nbsp;</td>		
		<td align="center" width="100"><strong>Dealership</strong></td>				
		<td align="center" width="100"><strong>Contact</strong></td>	
		<td align="center" width="200"><strong>Billing Address</strong></td>
		<td align="center" width="100"><strong>Phone</strong></td>		
		<td align="center" width="100"><strong>Email</td>
		<td align="center" width="100"><strong>Representative</td>
		<td align="center" width="50"><strong>Monthly Bill</td>
		<td align="center" width="150"><strong>Notes</td>
	</tr>

<?php
//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM dealers
	ORDER BY DealerName");
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
	$MthlyPmt = $row['MthlyPmt'];
	$Notes = $row['Notes'];
	$CountDealers++;

	if (isset($DealerStreet2)) {
	$DealerAddress = $DealerStreet1 . " " .  $DealerStreet2 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
	}
	else {
	$DealerAddress = $DealerStreet1 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
	}
	
	$AccountPayableCell= $AccountPayableCell1 . "-" . $AccountPayableCell2 . "-" .  $AccountPayableCell3;

	$Contact=$AccountPayFirstName . " " . $AccountPayLastName;
?>
	
<!--Disply Dealers from database into a table -->
	<tr valign='top'>
		<td colspan='9' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center"><?php echo $CountDealers;?></td>		
		<td align="center"><?php echo $DealerName;?></td>
		<td align="center"><?php echo $Contact;?></td>		
		<td align="center"><?php echo $DealerAddress;?></td>
		<td align="center"><?php echo $AccountPayableCell;?></td>
		<td align="center"><?php echo "<p><a href='mailto:$AccountPayableEmail'>" . $AccountPayableEmail . "</a></p>";?></td>
		<td align="center">
			<?php 
				//Get Dealer Rep's Email
				$GetRepsEmail = mysql_query("
					SELECT EmplEmail 	
					FROM employees 
					WHERE employee ='".$RepName."' ");

				while ($row = mysql_fetch_array($GetRepsEmail)) {
					$EmplEmail = $row['EmplEmail'];
					}		
				echo "<p><a href='mailto:$EmplEmail'>" . $RepName . "</a></p>";
				
			?>
		</td>
		<td align="center"><?php echo "$" . $MthlyPmt;?></td>
		<td align="center"><?php echo $Notes; ?></td>
	</tr>
<?php } 
?>
</table>
			
