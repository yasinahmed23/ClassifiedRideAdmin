<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.8.2.js"></script>
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>
<div id="container">
	<div id="main"><?php include 'includes/main.php';?></div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<p align="center"><font size="+2"><strong>SEARCH ALL TRANSACTIONS</strong></font></p>
		<div id="MyTrans">
			<p align="center"><strong>SEARCH BY DEALER</strong></p>
			<?php require_once 'includes/searchTransactionDealerName.php'; ?>
			
		</div>
		<div id="Referrals">
			<p align="center"><strong>SEARCH BY EMPLOYEE</strong></p>
			<?php require_once 'includes/searchTransactionEmployeeName.php'; ?>
		</div>
		<div id="export">
		<table width="300" border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td align="center"><p><a href="#">Export all <?php echo $num_Trans; ?> Transactions to .csv</a></p></td>
			</tr>
		</table>
	</div>
	</div>
</div>
</body>
</html>
