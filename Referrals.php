<?php
	//Enable Session Variables	
	session_start();
	
	//if (!isset($_SESSION['admin'])) {
	//header("location: login_error_admin.php");
	//}
	
	//Connect to Database	
	require_once 'includes/db_config2.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];

	$GetTrans = mysql_query("
	SELECT TransactionID
	FROM transactions
	");
	$num_rows = mysql_num_rows($GetTrans);
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Transactions | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/main.php';
		?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		
		<p align='center'><strong>All Referrals </strong></p>
		<div id="dealerlist">
		<?php 
		include 'includes/referralFeed.php';
		?>
		</div>
		<div id="export">
			<?php if (isset($_SESSION[admin])) {
			echo "
			<table width='300' border='0' cellpadding='0' cellspacing='0' align='center'>
				<tr>
					<td align='center'><form action='/ExportCSV_Referrals.php'><input class='Button' type='submit' value='Export All Referral Data to .csv' /></form></td>
				</tr>
			</table>";
			}
			?>
		</div>	
	</div>
</div>
</body>
</html>	
