<?php
	//retrieve user info from database
	$result = mysql_query("
	SELECT * FROM employees
	WHERE EmplUserName='".$user."'
	");
	while ($row = mysql_fetch_array($result))
	{
		$employeeID= $row ['employeeID'];		
		echo "<strong>Name:&nbsp;</strong>" . $row ['employee'] . "<br />";
		echo "<strong>Email:&nbsp;</strong>" . $row ['EmplEmail'] . "<br />";
		echo "<strong>Username:&nbsp;</strong>" . $row ['EmplUserName'] . "<br />";
		$pic= $row ['pic'];
		echo "<br />";
			if ($pic == null || $pic == "") {
				printf("<img src='../images/No_Image_Available.gif' width='100'>");
			}
			else {
				printf("<img src='../uploads/$pic' width='100'>");
			}
			
		echo "<br /><br />";
		echo "<strong>Address:&nbsp;</strong>" . $row ['EmplStreet1'] . " " . $row ['EmplStreet2'] . "<br />" . $row ['EmplCity'] . ", " . $row ['EmplState'] . " " . $row ['EmplZip'] . "<br /><br />" . "<strong>Phone:&nbsp;</strong>" .  $row ['EmplCellPhone1'] . "-" . $row ['EmplCellPhone2'] . "-" . $row ['EmplCellPhone3'];
		echo "<br /><br />";
						
	} 
?>

<!--<form action="/edit_profile.php"><input class="textfield, nav, fsSubmitButton" type="submit" value="Edit Profile"  /></form>-->
