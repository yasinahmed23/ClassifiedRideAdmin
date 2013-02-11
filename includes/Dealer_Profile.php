<?php
//Get Transaction Info for Dealer Usere 
	$GetTransInfo = mysql_query("
		SELECT *
		FROM transactions
		WHERE DealerID='$DealerID'");

	while ($row = mysql_fetch_array($GetTransInfo)) 
	{
		$TransactionDate = $row['TransactionDate'];
		$registered = $row['registered'];
		$Renewed = $row['Renewed'];
	}
	
	$sep="/";
	$month=substr($TransactionDate, 5, 2);
	$date=substr($TransactionDate, 8, 2);
	$year=substr($TransactionDate, 0, 4);
	$newDate=$month . $sep . $date . $sep . $year;
?>
<table width=100% cellpadding="0" cellspacing="0" border="0" align="center">
	<tr valign="top">
		<td width="150"><strong>PAYMENT METHOD</td>	
		<td width="150"><strong>MONTHLY PAYMENT</strong></td>
		<td width="150"><strong>Last PAYMENT</strong></td>
	</tr>
	<tr valign="top">
		<td colspan="4"><hr /></td>
	</tr>

<?php
//Get dealer info 
$GetDealerInfo = mysql_query("
	SELECT *
	FROM dealers
	WHERE DealerUserName='$DealerUser'");

while ($row = mysql_fetch_array($GetDealerInfo)) 
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
$Program = $row['Program'];
$MemberStatus = $row['MemberStatus'];
$MthlyPmt = $row['MthlyPmt'];
$MthlyPmt = number_format($MthlyPmt, 2);

//Get Rep Info for Dealer Usere 
$GetRepInfo = mysql_query("
	SELECT EmplCellPhone1, EmplCellPhone2, EmplCellPhone3, EmplEmail, pic
	FROM employees
	WHERE employee = '$RepName'");
while ($row = mysql_fetch_array($GetRepInfo)) 
{
$EmplCellPhone = ($row['EmplCellPhone1']) . "-" . ($row['EmplCellPhone2']) . "-" . ($row['EmplCellPhone3']);
$EmplEmail = ($row['EmplEmail']);
$pic = ($row['pic']);
}

?>

<!--Disply data from database into a table -->
	<tr valign="top">
		<td width="150"><font size="-2">************</font>1234</td>
		<td align="150">$ <?php echo $MthlyPmt;?></td>
		<td align="150" align="center"><?php echo $newDate; ?></td>	
	</tr>
	<tr valign="top">
		<td colspan="4"><hr /></td>
	</tr>
<?php } 
?>
</table>
<table width=330" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr valign="top">
		<td align="center">
			<p><font size="+1">
			<strong>Program:  <?php 
				if ($Program=="399"){
					echo "$" . $Program . "</strong>"; 
				}
				else {
					echo "$" . $Program . "</strong><br />(Competition Killer Package)"; 
				}
			?>
			<br /><br />
			<strong>My Rep: </strong>
			<br />
			<?php
				if ($pic == null || $pic == "") {
					printf("<img src='../images/No_Image_Available.gif' width='100'>");
				}
				else {
					echo 
						"<a href='mailto:" .  
						$EmplEmail . 
						"?subject=" . 
						$DealerName . 
						"'>" 										;
					printf("<img src='../uploads/$pic' width='100'>");
					echo "</a>";
				}				
				echo "<br />" . $RepName . "<br /><strong>" . $EmplCellPhone . "</strong>"; 			
			?>
			<br />
			<a href="mailto:<?php echo $EmplEmail; ?>?subject=<?php echo 'Question about ' . $DealerName; ?>"><?php echo $EmplEmail; ?></a></font></p>
		</td>
	</tr>
</table>
<table width=330" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr valign="top">
		<td>
		<?php
		if ($MemberStatus="INACTIVE") {
			echo "<p align='center'><font color='red'><strong>Account Status: INACTIVE.</strong></font><br /><a href='#'>Please Click Here To Make A Payment</a></p>";
		}

		?>
		</td>
	</tr>
</table>
