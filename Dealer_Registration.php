<?php
	//Enable Session Variables	
	session_start();
	$DealerUser = $_SESSION['DealerUser'];
	
	//Connect to Database	
	require_once 'includes/db_config2.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dealer Signup | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="autocomplete/searchFullName.js"></script>
<SCRIPT TYPE="text/javascript" SRC="js/verifynotify.js"></SCRIPT>
</head>
<body>
<div id="top">
<?php include 'includes/headerDealer.php'; ?>
</div>
<div id="container">
	<div id="Dealermain">
		<?php include 'includes/Dealer_main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
	<?php	
	if (!isset($_SESSION[DealerUser])) {
		include 'Forms/DealerSignupForm.php';
		include 'Forms/formValidationDealer.php';
	
	}
	else {
	include 'includes/contentDealer.php';
	};
	?>
	</div>
</div>	
<br /><br />
</body>
</html>	


