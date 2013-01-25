<?php
	//retrieve user info from database
	$result = mysql_query("
	SELECT * FROM dealers
	WHERE DealerUser='".$DealerUser."'
	");

	echo "<br />";
	while ($row = mysql_fetch_array($result))
	{
		$DealerID= $row ['DealerID'];		
		echo "<strong>Name:&nbsp;</strong>" . $row ['DealerName'] . "<br />";
		echo "<strong>Email:&nbsp;</strong>" . $row ['DealerEmail'] . "<br />";
		echo "<strong>Username:&nbsp;</strong>" . $row ['DealerUserName'] . "<br />";
		$pic= $row ['pic'];
		echo "<br />";
		printf("<img src='../uploads/$pic' width='100'>");
		echo "<br /><br />";
		echo "<strong>Address:&nbsp;</strong>" . $row ['DealerStreet1'] . " " . $row ['DealerStreet2'] . "<br />" . $row ['DealerCity'] . ", " . $row ['DealerState'] . " " . $row ['DealerZip'] . "<br /><br />" . "<strong>Phone:&nbsp;</strong>" .  $row ['DealerCellPhone1'] . "-" . $row ['DealerCellPhone2'] . "-" . $row ['DealerCellPhone3'];
						
	} 
?>
<form action="/edit_profile.php"><input class="textfield, nav" type="submit" value="Edit Profile" /></form>
