<table cellpadding="5" cellspacing="0" border="0" align="center" width="100%">
	<tr>
		<td align="center" width="20">&nbsp;</td>		
		<td align="center" width="80"><strong>Start Date</strong></td>				
		<td align="center" width="170"><strong>Name</strong></td>	
		<td align="center" width="150"><strong>Location</strong></td>		
		<td align="center" width="170"><strong>Representative</td>
		<td align="center" width="60"><strong>Program</td>
		<td align="center" width="190"><strong>Monthly Payment</td>
	</tr>
</table>
<div id="referral">
<table cellpadding="5" cellspacing="0" border="0" align="center" width="100%">
<?php
//Get data from database and assign to a variable
$CountDealers=0;
while ($row = mysql_fetch_array($GetDealerInfo)) {
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
	$MthlyPmt = number_format($MthlyPmt, 2);
	$StartDate = $row['StartDate'];
	
	$CountDealers++;
?>
	
<!--Disply Dealers from database into a table -->
	<tr valign='top'>
		<td colspan='9' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center" width="20"><?php echo $CountDealers;?></td>		
		<td align="center" width="80"><?php 
					if ($StartDate!="") {
					echo $StartDate;
					}
					else {
						echo "<font color='red' size='-2'>Start Date Not Set Yet</font>";
					}
				?>
		</td>
		<td align="center" width="170"><?php echo $DealerName;?></td>		
		<td align="center" width="150"><?php echo $DealerCity . ", " . $DealerState;?></td>
		<!--<td align="center"><?php echo "<p><a href='mailto:$DealerEmail'>" . $DealerContact . "</a></p>";?></td>-->
		<td align="center" width="170">
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
		<td align="center" width="60"><?php echo "$" . $Program;?></td>
		<td width="190" align="center"><?php echo "$" . $MthlyPmt;?></td>
	</tr>
<?php } 
?>
</table>
</div>
