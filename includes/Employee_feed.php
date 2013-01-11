<div class="employeeFeed">
<table cellpadding="10" width="700" cellspacing="0" border="1" align="center"><tr><td>
<table cellpadding="5" cellspacing="0" border="0" align="center">
	<tr valign="top">
		<td align="center"><strong>ID</strong></td>				
		<td align="center"><strong>First Name</strong></td>	
		<td align="center"><strong>Last Name</strong></td>
		<td align="center"><strong>Email</td>
		<td align="center"><strong>City</td>
		<td align="center"><strong>State</td>
		<td align="center"><strong>Profile Pic</td>
	</tr>

<?php
//Get data from database and assign to a variable
$sql = mysql_query("
	SELECT *
	FROM employees 
	ORDER BY employeeID DESC
");

while ($row = mysql_fetch_array($sql)) 
{
$TimeRegistered = $row['TimeRegistered'];
$employeeID = $row['employeeID'];
$EmplFirstName = $row['EmplFirstName'];
$EmplMiddleInitial = $row['EmplMiddleInitial'];
$EmplLastName = ($row['EmplLastName']);
$ReferredBy = $row['ReferredBy'];
$EmplEmail = $row['EmplEmail'];
$EmplPhone = ($row['EmplCellPhone1']) . "-" . ($row['EmplCellPhone2']) . "-" . ($row['EmplCellPhone3']);
$pic= $row ['pic'];
$EmplCity = $row['EmplCity'];
$EmplState = $row['EmplState'];
$EmplCountry = $row['EmplCountry'];

?>
	
<!--Disply data from database into a table -->
	<tr>
		<td align="center"><?php echo $employeeID;?></td>		
		<td align="center"><?php echo $EmplFirstName;?></td>
		<td align="center"><?php echo $EmplLastName;?></td>
		<td align="center"><a href="mailto:
			<?php echo $EmplEmail; ?>">
			<?php echo $EmplEmail;?></a>
				
		</td>
		<td align="center"><?php echo $EmplCity;?></td>		
		<td align="center"><?php echo $EmplState;?></td>		
		<td align="center"> 
			<?php
				if ($pic == null || $pic == "") {
					 	printf("<img src='/images/No_Image_Available.gif' width='100'>");
				}
				else {
					printf("<img src='/uploads/$pic' width='100'>");
				}
			?>	 
			</td>
	</tr>
	<tr>
		<td colspan="8"><hr /></td>
	</tr>
<?php } 
?>


</table>
</td></tr></table>
</div>
