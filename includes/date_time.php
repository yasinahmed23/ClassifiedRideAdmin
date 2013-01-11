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
$time = strtotime($date2);
echo "seconds = " . date('s', $time) . "<br />";
?>


</div>
</body>
</html>
