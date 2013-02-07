<p align="center">History</p>

<table cellpadding="10" cellspacing="0" border="1" align="center"><tr><td>
<table cellpadding="5" cellspacing="0" border="0">
	<tr valign="top">
		<td align="center"><strong>Transaction Date</strong></td>		
		<td align="center"><strong>Trans ID</strong></td>		
		<td align="center"><strong>Rep</td>
		<td align="center"><strong>Registered</td>
		<td align="center"><strong>Renewed</td>
	</tr>
	
<?php
$DealerUser = $_SESSION['DealerUser'];
//Get DealerID from database
$GetDealerID = mysql_query("
	SELECT DealerID
	FROM  dealers
	WHERE DealerUserName='".$DealerUser."'
");

while ($row = mysql_fetch_array($GetDealerID)) 
{
$DealerID = $row['DealerID'];
?>

<?php
//Get Dealer Transactions from database by Dealer IDand assign to a variable
$sql = mysql_query("
	SELECT *
	FROM  transactions
	WHERE DealerID='$DealerID'
");

while ($row = mysql_fetch_array($sql)) 
{
$TransactionDate = $row['TransactionDate'];
$TransactionID = $row['TransactionID'];
$employee = $row['employee'];
$registered = $row['registered'];
$Renewed = $row['Renewed'];

$sep="/";
$month=substr($TransactionDate, 5, 2);
$date=substr($TransactionDate, 8, 2);
$year=substr($TransactionDate, 0, 4);
$newDate=$month . $sep . $date . $sep . $year;

?>
	
<!--Disply data from database into a table -->
	<tr>
		
		<td align="center"><?php echo $newDate?></td>		
		<td align="center"><?php echo $TransactionID;?></td>		
		<td align="center"><?php echo $employee;?></td>
		<td align="center"><?php			
				if (empty($registered)) {
	    				echo "";
				} else {
	    				echo "$" . number_format($registered, 2);
				}

				?></td>
		
		<td align="center"><?php			
				if (empty($Renewed)) {
	    				echo "";
				} else {
	    				echo "$" . number_format($Renewed, 2);
				}

				?></td>
	</tr>
	<tr>
		<td colspan="6"><hr /></td>
	</tr>
<?php } }
?>
</table>

</td></tr></table>

