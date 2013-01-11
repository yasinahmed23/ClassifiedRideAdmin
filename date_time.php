<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	//echo $user;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Blogs</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>l
<div id="logo"><h1>Blogs</h1></div>
<div id="login">
<?php
echo $user . " you are logged in.";
?>
</div>	
<div id="container">

<?php
$today = getdate();
//print_r($today);
$sql = (mysql_query("SELECT EXTRACT(YEAR FROM date_posted) AS OrderYear,
EXTRACT(MONTH FROM date_posted) AS OrderMonth,
EXTRACT(DAY FROM date_posted) AS OrderDay,
FROM Orders
WHERE OrderId=1"));


$my_t=getdate(date("U"));
echo "<br /> Seconds = ";
print("$my_t[seconds]");

echo "<br />Seconds + 5 = ";
?>



</table>
</div>


</div>
</body>
</html>
