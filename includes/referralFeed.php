<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr valign="top">
		<td>

		<?php
		//GET EMPLOYEE LIST FROM REFERRAL TABLE SO WE CAN COUNT # HIRED FOR EACH ONE
		$GetEmployees = mysql_query("
		SELECT DISTINCT EmployeeName
		FROM Referrals 
		ORDER BY EmployeeName ASC");
		while ($row = mysql_fetch_array($GetEmployees)) 
		{
		$EmployeeName = $row['EmployeeName'];
		$NewEmplName = $row['NewEmplName'];

		//COUNT THE NUMBER OF PEOPLE THE CURRENT EMPLOYEE HAS HIRED
		$CountHired = mysql_query("
		SELECT *
		FROM Referrals
		WHERE EmployeeName='".$EmployeeName."'");

		$num_Hired = mysql_num_rows($CountHired);
		?>

		
		<?php echo "<strong>" . $EmployeeName . " has hired " . $num_Hired . " People</strong>";
	
			//GET REFERRAL LIST FOR CURRENT EMPLOYEE
			$GetReferals = mysql_query("
				SELECT *
				FROM Referrals 
				WHERE EmployeeName='".$EmployeeName."'
				ORDER BY EmployeeName ASC");
		?>
				
		<table cellpadding="0" cellspacing="0" border="0" >
			<tr valign="top">
				<td>
				<?php
				$rownumber=0;
				while ($row = mysql_fetch_array($GetReferals)) 
				{
				$NewEmpEmail = ($row['NewEmpEmail']);
				$NewEmplName = $row['NewEmplName'];
				$rowNumber++;
				?>

			
					<ul>
						<li>
						<?php
						//COUNT DEALERSHIPS FOR CURRENT NEW HIRE 
						$GetNumDealers = mysql_query("
						SELECT *
						FROM  dealers	
						WHERE  RepName ='".$NewEmplName."'
						");

						$num_Dealers = mysql_num_rows($GetNumDealers);
						//COUNT REFERRALS FOR CURRENT NEW HIRE 
						$GetNumRef = mysql_query("
						SELECT *
						FROM  Referrals	
						WHERE  EmployeeName ='".$NewEmplName."'
						");

						$num_Ref = mysql_num_rows($GetNumRef);
						echo $rowNumber . ") " . $NewEmplName . " has signed " . "<strong>" . $num_Dealers . "</strong>  Dealerships and Hired <strong>" . $num_Ref . " </strong>People";
						 ?>
						</li>
					</ul>
			
				<?php
				} 
				?>
		
				</td>
			</tr>
		</table>
		<hr>
		
		<?php
		} 
		?>
		
		</td>
	</tr>
</table>
