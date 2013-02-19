<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr valign="top">
		<td>
		<?php
		$InsideRowNumber=0;
		while ($row = mysql_fetch_array($GetReferals)) 
			{
			$NewEmpEmail = ($row['NewEmpEmail']);
			$NewEmplName = $row['NewEmplName'];
			$InsideRowNumber++;
		?>
			<ul>
				<li>
				<?php
				//COUNT DEALERSHIPS FOR CURRENT NEW HIRE 
				$GetNumDealers = mysql_query("
					SELECT DealerID
					FROM  dealers	
					WHERE  RepName ='".$NewEmplName."'");

				$num_Dealers = mysql_num_rows($GetNumDealers);

				//COUNT ACTIVE DEALERSHIPS FOR CURRENT NEW HIRE 
				$GetNumActiveDealers = mysql_query("
					SELECT DealerID
					FROM  dealers	
					WHERE  RepName ='".$NewEmplName."'
					AND MemberStatus!='INACTIVE'");

				$num_ActiveDealers = mysql_num_rows($GetNumActiveDealers);

				//COUNT REFERRALS FOR CURRENT NEW HIRE 
				$GetNumRef = mysql_query("
					SELECT *
					FROM  Referrals	
					WHERE  EmployeeName ='".$NewEmplName."'");

				$num_Ref = mysql_num_rows($GetNumRef);
				echo $InsideRowNumber . ")&nbsp;" . $NewEmplName . " has signed " . "<strong>" . $num_Dealers . "</strong>&nbsp;Dealerships (" .$num_ActiveDealers .  "&nbsp;Active)&nbsp;and Hired <strong>" . $num_Ref . " </strong>People";
				 ?>
				</li>
			</ul>
		<?php
		} 
		?>
		</td>
	</tr>
</table>
