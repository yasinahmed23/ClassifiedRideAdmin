<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION['admin'])) {
	header("location: login_error_admin.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE="text/javascript" SRC="js/verifynotify.js"></SCRIPT>
<SCRIPT TYPE="text/javascript" SRC="js/jquery-1.8.2.js"></SCRIPT>
<script src="autocomplete/searchFullName.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database Home</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>           
</div>
<div id="container">
	<div id="main">
		<?php 
		include 'includes/main.php';
		?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		 
		<?php 
		include 'Forms/AddMemberForm.php';
		include 'Forms/formValidationAdmin.php';
		?>
	</div>
</div>	
<?php require_once 'includes/footer.php'; ?>
</body>
</html>
