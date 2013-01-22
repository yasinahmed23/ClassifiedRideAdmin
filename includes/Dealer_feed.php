<table cellpadding="5" cellspacing="0" border="0" align="center" width="750">
	<tr>
		<td align="center">&nbsp;</td>		
		<td align="center"><strong>Time Registered</strong></td>				
		<td align="center"><strong>Name</strong></td>	
		<td align="center"><strong>City</strong></td>		
		<td align="center"><strong>State</strong></td>
		<td align="center"><strong>Main Contact</td>
		<td align="center"><strong>Representative</td>
		<td align="center"><strong>Program</td>
	</tr>

<?php
//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM dealers");
$CountDealers=0;
while ($row = mysql_fetch_array($sql)) {
	$DealerID = $row['DealerID'];
	$TimeRegistered = $row['TimeRegistered'];
	$DealerName = $row['DealerName'];
	$DealerCity = ($row['DealerCity']);
	$DealerState = $row['DealerState'];
	$DealerEmail = $row['DealerEmail'];
	$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
	$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
	$RepName = $row['RepName'];
	$Program = $row['Program'];
	$CountDealers++;
?>
	
<!--Disply Dealers from database into a table -->
	<tr valign='top'>
		<td colspan='8' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center"><?php echo $CountDealers;?></td>		
		<td align="center"><?php echo $TimeRegistered;?></td>
		<td align="center"><?php echo $DealerName;?></td>		
		<td align="center"><?php echo $DealerCity;?></td>
		<td align="center"><?php echo $DealerState;?></td>
		<td align="center"><?php echo "<p><a href='mailto:$DealerEmail'>" . $DealerContact . "</a></p>";?></td>
		<td align="center" width="70">
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
		<td align="center"><?php echo "$" . $Program;?></td>
	</tr>
<?php } 
?>
</table>
