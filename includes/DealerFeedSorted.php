<table cellpadding="5" cellspacing="0" border="0" align="center" width="750">
	<tr>
		<td align="center">&nbsp;</td>		
		<td align="center"><strong>Start Date</strong></td>				
		<td align="center"><strong>Name</strong></td>	
		<td align="center"><strong>Location</strong></td>		
		<td align="center"><strong>Representative</td>
		<td align="center"><strong>Program</td>
		<td align="center"><strong>Monthly Payment</td>
	</tr>

<?php
//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM dealers 
	where TimeRegistered between date_sub(now(),INTERVAL '$numdays' DAY) and now()
	ORDER BY DealerID DESC");
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
	$MthlyPmt = $row['MthlyPmt'];
	$StartDate = $row['StartDate'];
	
	$CountDealers++;
?>
	
<!--Disply Dealers from database into a table -->
	<tr valign='top'>
		<td colspan='9' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center"><?php echo $CountDealers;?></td>		
		<td align="center"><?php 
					if ($StartDate!="") {
					echo $StartDate;
					}
					else {
						echo "<font color='red' size='-2'>Start Date Not Set Yet</font>";
					}
				?>
		</td>
		<td align="center"><?php echo $DealerName;?></td>		
		<td align="center"><?php echo $DealerCity . ", " . $DealerState;?></td>
		<!--<td align="center"><?php echo "<p><a href='mailto:$DealerEmail'>" . $DealerContact . "</a></p>";?></td>-->
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
		<td align="center"><?php echo "$" . $MthlyPmt;?></td>
	</tr>
<?php } 
?>
</table>
