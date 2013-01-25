<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[DealerUser])) {
	header("location: Dealers.php");
	}
	
	//Connect to Database	
	include '../includes/db_configDealers.php';

	$DealerUser = $_SESSION['DealerUser'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE="text/javascript" SRC="../js/verifynotify.js"></SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Page</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include '../includes/headerDealer.php'; ?>
</div>
<div id="container">
	<div id="Dealermain">
		<?php include '../includes/Dealer_main.php'?>
	</div>
	<div>	
	<?php include 'change_Dealer_password_form.php'?>
	<?php include '../includes/verify_passwords.php'?>
	</div>
</div>
</body>
</html>
