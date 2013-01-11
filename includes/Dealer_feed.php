<table cellpadding="5" cellspacing="0" border="0" align="center" class="table">
	<tr>
		<td align="center"><strong>ID</strong></td>		
		<td align="center"><strong>Time Registered</strong></td>				
		<td align="center"><strong>DealerName</strong></td>	
		<td align="center"><strong>DealerCity</strong></td>		
		<td align="center"><strong>DealerState</strong></td>
		<td align="center"><strong>Main Contact</td>
		<td align="center"><strong>Representative</td>
	</tr>

<?php
//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM dealers
");

while ($row = mysql_fetch_array($sql)) 
{
$DealerID = $row['DealerID'];
$TimeRegistered = $row['TimeRegistered'];
$DealerName = $row['DealerName'];
$DealerCity = ($row['DealerCity']);
$DealerState = $row['DealerState'];
$DealerEmail = $row['DealerEmail'];
$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
$RepName = $row['RepName'];

?>
	
<!--Disply data from database into a table -->
	<tr valign='top'>
		<td colspan='7' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center"><?php echo $DealerID;?></td>		
		<td align="center"><?php echo $TimeRegistered;?></td>
		<td align="center"><?php echo $DealerName;?></td>		
		<td align="center"><?php echo $DealerCity;?></td>
		<td align="center"><?php echo $DealerState;?></td>
		<td align="center"><?php echo $DealerContact;?></td>
		<td align="center"><?php echo $RepName;?></td>
	</tr>
<?php } 
?>


</table>
