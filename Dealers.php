<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	require_once 'includes/db_config2.php';
	require_once 'Functions/DealerFunctions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dealers | ClassifiedRide</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" title="Style CSS" href="styles/calendar.css" type="text/css" media="all" />
<script type="text/javascript">
  var formatSplitter = "/";
  var monthFormat = "mm";
  var yearFormat = "yyyy";
</script>
<script type="text/javascript" src="js/calendar.js"></script>
<script src="js/jquery-1.8.2.js"></script>
<script src="autocomplete/searchFullName.js"></script>
<SCRIPT TYPE="text/javascript" SRC="js/verifynotify.js"></SCRIPT>
<SCRIPT TYPE="text/javascript" SRC="js/CheckDealerUserName.js"></SCRIPT>
<style>
#DealerUserName{
}

#tick{display:none}
#cross{display:none}
</style>
</head>
<body>
<div id="top">
	<?php include 'includes/headerDealer.php'?>
</div>
<div id="container">
	<div id="Dealermain">
		<?php include 'includes/Dealer_main.php'?>
	</div>
	<div id="spacer2">&nbsp;</div>
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
<?php require_once 'includes/footer.php'; ?>
</body>
</html>

