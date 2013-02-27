<?php
	
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[ARadmin])) {
	header("location: ../login_error_AR.php");
	}
		
	//Connect to Database	
	require_once '../includes/db_config2.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

	$GetDealers = mysql_query("
	SELECT DealerID, Program
	FROM dealers");
	$num_rows = mysql_num_rows($GetDealers);

	//Count Monthly Revenue from Dealer Registrations
	$CountDealers = mysql_query(" 
		SELECT SUM(Program) 
		AS total FROM dealers ");
	$DealerTotal = mysql_fetch_assoc($CountDealers);

	require_once '../Functions/Functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE="text/javascript" SRC="../js/verifynotify.js"></SCRIPT>
<SCRIPT TYPE="text/javascript" SRC="../js/jquery-1.8.2.js"></SCRIPT>
<script src="../autocomplete/searchFullName.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database AR</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php 
	include '../includes/header_AR.php'; 
	?>
</div>
<div id="container">	
	<div id="main">
		<?php 
		include '../includes/nav.php';
		?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		Here You will be able to easily see who has paid and who hasn't....and sort
		<br /><br />
		Currently Tim sends out the bills.  We need to automate this process
	</div>
</div>	
<?php require_once '../includes/footer.php'; ?>
</body>
</html>
