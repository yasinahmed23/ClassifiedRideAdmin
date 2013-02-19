<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION['admin'])) {
	header("location: login_error_admin.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';	
	require_once 'Functions/ARFunctions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE="text/javascript" SRC="js/verifynotify.js"></SCRIPT>
<SCRIPT TYPE="text/javascript" SRC="js/jquery-1.8.2.js"></SCRIPT>
<script src="autocomplete/searchFullName.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database Accounts Receivable</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header_AR.php'; ?>           
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
		include 'Forms/AddARForm.php';
		include 'Forms/formValidationAR.php';
		?>
	</div>
</div>	
<?php require_once 'includes/footer.php'; ?>
</body>
</html>
