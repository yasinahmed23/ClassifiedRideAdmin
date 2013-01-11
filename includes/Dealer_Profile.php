<table width="300" cellpadding="5" cellspacing="0" border="1" align="center">
	<tr>
		
		<td align="center"><strong>NAME</strong></td>
		<td align="center"><strong>PAYMENT METHOD</td>	
		<td align="center"><strong>MONTHLY PMT</strong></td>	
	</tr>

<?php
//Get dealer info from database and assign as a variable
$DealerUserName = $_SESSION[DealerUser];

$sql = mysql_query("
	SELECT *
	FROM dealers
	WHERE DealerUserName='$DealerUserName'
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
$Program = $row['Program'];

//Get employee Cell # from Full Name 
$GetRepInfo = mysql_query("
	SELECT EmplCellPhone1, EmplCellPhone2, EmplCellPhone3, EmplEmail, pic
	FROM employees
	WHERE employee = '$RepName'
");

while ($row = mysql_fetch_array($GetRepInfo)) 
{
$EmplCellPhone = ($row['EmplCellPhone1']) . "-" . ($row['EmplCellPhone2']) . "-" . ($row['EmplCellPhone3']);
$EmplEmail = ($row['EmplEmail']);
$pic = ($row['pic']);
}

?>
	
<!--Disply data from database into a table -->
	<tr>
		
		<td align="center"><?php echo $DealerName;?></td>
		<td align="center">&nbsp;</td>
		<td align="center">$<?php echo $Program;?></td>	
		
	
	</tr>
<?php } 
?>
</table>
<br /><br />
<table width="300" cellpadding="0" cellspacing="0" align="center" border="0">
	<tr valign="top">
		<td align="center">
			<table>
				<tr>
					<td align="center">
						<p><font size="+1"><strong>My Rep: </strong>
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
		</td>
	</tr>
</table>

</table>
<a href="mailto:$EmplEmail">
