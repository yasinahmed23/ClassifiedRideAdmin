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
<title>Payment | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.8.2.js"></script>
</head>
<body>
<div id="top">
	<?php require_once 'includes/headerDealer.php'; ?>
</div>
<div id="container">
	<div id="Dealermain">
		<?php require_once 'includes/Dealer_main.php'?>
	</div>
	<div id="spacer2">&nbsp;</div>
	<div id="profile">
		<table width="300" cellpadding="10" cellspacing="0" class="table2" border="0" align="center">
			<tr valign="top">
				<td>
					<?php require_once 'Forms/DealerPaymentForm.php'?>
				</td>
			</tr>
		</table>
	</div>
</div>	
<?php require_once 'includes/footer.php'; ?>
</body>
</html>	


