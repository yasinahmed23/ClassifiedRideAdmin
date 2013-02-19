<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[DealerUser])) {
	header("location: login_errorDealer2.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_configDealers.php';
	require_once'Functions/DealerFunctions.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE="text/javascript" SRC="js/verifynotify.js"></SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database Home</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
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
		<?php include 'includes/MyDealerTransaction_feed.php';	
		?>
		
	</div>
</div>
<?php require_once 'includes/footer.php'; ?>		
</body>
</html>
