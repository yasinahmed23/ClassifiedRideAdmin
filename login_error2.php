<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	require_once 'includes/db_config2.php';

	$user = $_SESSION['user'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE="text/javascript" SRC="js/verifynotify.js"></SCRIPT>
<SCRIPT TYPE="text/javascript" SRC="js/jquery-1.8.2.js"></SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database Home</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center><h1>Please Login or Register to Access Database</h1></center>
<div id="top">
	<?php include 'includes/header.php'; ?>           
</div>
<div id="container">
	<div id="main">
		<?php 
		include 'includes/Employee_main.php';
		?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php 
		if (!isset($_SESSION[user])) {
		include 'Forms/NewHireForm.php';
		include 'Forms/formValidation.php';
		}
		else {
			include 'includes/content.php';
			};
		?>
	</div>
</div>		
</body>
</html>
