<table cellpadding="5" cellspacing="0" border="0" align="center" width="850" class="table">
	<tr>
		<td align="center"><strong>Period Ending</strong></td>			
<td align="center"><strong>Trans ID</strong></td>				
		<td align="center"><strong>Empl ID</strong></td>		
		<td align="center"><strong>Employee</strong></td>
		<td align="center"><strong>Com</strong></td>
		<td align="center"><strong>Dealer ID</td>
		<td align="center"><strong>Dealership</td>
		<td align="center"><strong>Reg</td>
		<td align="center"><strong>Renewed</td>
		<td align="center"><strong>Member</td>
		<td align="center"><strong>Referrals</td>
	</tr>
<?php


//Display 10 newest posts
$sql = mysql_query("
	SELECT *
	FROM transactions 
	ORDER BY TransactionID DESC
");

while ($row = mysql_fetch_array($sql)) 
{
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
?>
	<tr valign='top'>
		<td colspan='11' align='center'><hr /></td>
	</tr>
	<tr>
		<td align="center"><?php echo $TransactionDate; ?></td>		
		<td align="center"><?php echo $TransactionID;?></td>	
		<td align="center"><?php echo $eID;?></td>		
		<td align="center"><?php echo $employee;?></td>
		<td align="center">
			<?php			
			if (empty($Commission)) {
    				echo "";
			} else {
    				echo $Commission;
			}

			?>
		</td>
		<td align="center"><?php echo $DealerID;?></td>
		<td align="center"><?php echo $DealerName;?></td>
		<td align="center">
			<?php			
			if (empty($registered)) {
    				echo "";
			} else {
    				echo "$" . $registered;
			}

			?>
		</td>
		<td align="center">
			<?php			
			if (empty($Renewed)) {
    				echo "";
			} else {
    				echo "$" . $Renewed;
			}

			?>
		</td>
		<td align="center"><?php echo $member;?></td>
		<td align="center">
			<?php			
			if (empty($EmplReferral)) {
    				echo "<font size='-2' color='#FF0000'><strong>" . $employee . " did not select the person who hired him.</strong></font>" ;
			} else {
    				echo $EmplReferral;
			}

			?>
		</td>
	</tr>
<?php } 
?>


</table>

