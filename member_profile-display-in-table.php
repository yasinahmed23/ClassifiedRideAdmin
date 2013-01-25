<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';

	$user = $_SESSION['user'];
	//echo $user;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Profile</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="center"><h1>WELCOME TO YOUR WEBSITE</h1></div>
<div align="center" id="container_member">
<p><font size="+1"><strong>MY PROFILE:</strong></font></p>
<?php
	//retrieve user info from database
	$result = mysql_query("
	SELECT * FROM members
	WHERE username='$user'
	");
	
	echo "<table align='center' cellpadding='5' cellspacing='0' border='1'>
		<tr>		<th>Name:  </th>
		<th>Email: </th>
		<th>Username: </th>
		</tr>";
	while ($row = mysql_fetch_array($result))
	{
		echo "<tr>";		
		echo "<td>" . $row ['firstname'] . " " . $row['lastname'] . "</td>";
		echo "<td>" . $row ['email'] . "</td>";
		echo "<td>" . $row ['username'] . "</td>";
		echo "</tr>";
	} 
	echo "</table>";
	mysql_close($connectDB);
	echo "<br /><br />";	
?>
<div> 
	<form action="logout.php" onSubmit="alert('You are now logged out');" name="logout" id="logout">
	<input class="textfield" type="submit" value="Log Out" id="logout" name="logout" />
	</form>
</div>
</div>
</body>
</html>
