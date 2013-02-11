<?php
	//Get Employee List from Referral Tbl so we can count # hired for each one
	$SelectReferrals = mysql_query("
		SELECT DISTINCT EmployeeName
		FROM Referrals 
		ORDER BY EmployeeName ASC");

	//GET EMPLOYEE LIST FROM REFERRAL TABLE 
		$rowNumber=0;
		while ($row = mysql_fetch_array($SelectReferrals)) {
			$EmployeeName = $row['EmployeeName'];
			$NewEmplName = $row['NewEmplName'];
			$rowNumber++;
			//Count the num the current employee has hired
			$CountHiredbyEmpl = mysql_query("
				SELECT RefID
				FROM Referrals
				WHERE EmployeeName='".$EmployeeName."'");

			$num_Hired = mysql_num_rows($CountHiredbyEmpl);
			echo "<strong>" . $rowNumber . ")&nbsp;" . $EmployeeName . "has hired " . $num_Hired . " people.</strong>";
?>
		
			<?php
				//GET REFERRAL LIST FOR CURRENT EMPLOYEE
				$GetReferals = mysql_query("
					SELECT *
					FROM Referrals 
					WHERE EmployeeName='".$EmployeeName."'
					ORDER BY EmployeeName ASC");

				include 'ReferralListByEmployee.php';
				echo "<hr>";
			} 
			?>
