<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: login_error2.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employees | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<SCRIPT TYPE="text/javascript" SRC="js/jquery-1.8.2.js"></SCRIPT>
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>	
<div id="container">
	<div id="main">
		<?php include 'includes/Employee_main.php'?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php include 'includes/Employee_feed.php'?>
	
	<?php if (isset($_SESSION[admin])) {
		echo "<br /><a href='ExportCSV_Employees.php'>Export to .csv</a>";
	}
	
	?>
	</div>
</div>
</body>
</html>	
