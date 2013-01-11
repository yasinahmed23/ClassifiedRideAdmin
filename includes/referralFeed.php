<?php
$sql = mysql_query("
	SELECT *
	FROM Referrals 
	ORDER BY RefID");
?>
<ul>
<table align="center" cellpadding="10" cellspacing="0" border="0" width="500" class="table">
	<tr valign="top">
		<td align="center">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td>
						
							<?php
							while ($row = mysql_fetch_array($sql)) 
							{
							$RefID = $row['RefID'];
							$EmployeeID = $row['EmployeeID'];
							$EmployeeName = $row['EmployeeName'];
							$NewEmpEmail = ($row['NewEmpEmail']);
							$NewEmplName = $row['NewEmplName'];
							?>

							<li>
								<?php echo $RefID . ") <strong>" . $EmployeeName . " hired " . $NewEmplName . "</strong>";?>
								<ul>
									<li>
									<?php 
									$GetNumDealers = mysql_query("
									SELECT *
									FROM  Referrals	
									WHERE  EmployeeName ='".$NewEmplName."'
									");

									$num_rows = mysql_num_rows($GetNumDealers);
									echo $NewEmplName . " has signed " . "<strong>" . $num_rows . "</strong>  Dealerships";
									 ?>
									</li>
								</ul>
								<hr>
							</li>
							<?php
							} 
							?>
						</ul>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
