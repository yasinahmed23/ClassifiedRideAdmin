<table cellpadding="7" cellspacing="0" border="0" align="center" width="850">
	<tr>
		<td align="center"><strong>ID</strong></td>		
		<td align="center"><strong>Time Registered</strong></td>				
		<td align="center" width="75"><strong>DealerName</strong></td>	
		<td align="center"><strong>Location</strong></td>		
		<td align="center"><strong>Main Contact</td>
		<td align="center"><strong>Phone Number</td>
		<td align="center"><strong>Program</td>
		<td align="center" width="100"><strong>Status</strong></td>
	</tr>
	<?php
	while ($row = mysql_fetch_array($sql)) {
	$DealerID = $row['DealerID'];
	$TimeRegistered = $row['TimeRegistered'];
	$DealerName = $row['DealerName'];
	$DealerCity = ($row['DealerCity']);
	$DealerState = $row['DealerState'];
	$DealerEmail = $row['DealerEmail'];
	$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
	$ContactPosition = $row['ContactPosition'];
	$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
	$RepName = $row['RepName'];
	$Program = $row['Program'];
	$MemberStatus = $row['MemberStatus'];
	?>

	<!--Disply data from database into a table -->
	<tr valign="top">
		<td colspan="9" align="center"><hr /></td>
	</tr>
	<tr>
		<td align="center"><?php echo $DealerID;?></td>		
		<td align="center"><?php echo $TimeRegistered;?></td>
		<td align="center" width="75">
			<p><a href="mailto:<?php echo $DealerEmail; ?>"><?php echo $DealerName;?></a></p>
		</td>		
		<td align="center"><?php echo $DealerCity . ", " . $DealerState;?></td>
		<td align="center" width="75">
			<p><a href="mailto:<?php echo $DealerEmail; ?>"><?php echo $DealerContact . ", " . $ContactPosition;?></a></p>
		</td>
		<td align="center"><?php echo $DealerContactPhone;?></td>
		<td align="center"><?php echo "$" . $Program;?></td>
		<td align="center" width="100">
		<?php
		if ($MemberStatus="INACTIVE") {
			echo "<p align='center'><font color='red'><strong>" . $MemberStatus . "</strong></font></p>";
		}
		else {
			echo "<p align='center'>" . $MemberStatus . "</p>";
		}
		?>
		</td>
	</tr>
	<?php }  
	?>
	</table>
