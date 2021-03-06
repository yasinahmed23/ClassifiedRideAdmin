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

	// create variables out of user input
	$numdays=$_POST['numdays'];	
	
	$GetTrans = mysql_query("
	SELECT TransactionID
	FROM transactions
	where TransactionDate between date_sub(now(),INTERVAL '$numdays' DAY) and now()");
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
		<?php include 'includes/nav.php';
		?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		
		<?php 
		if (isset($_SESSION[admin])) {
			echo " 
			<p align='center'><font size='+1'><strong>You are viewing the transactions from the past  " . $numdays . " Days</strong>
			</font></p>";	
		}
		?>
		<table width="700" cellpadding="5" cellspacing="0" border="0" class="table" align="center">
			<tr>
				<td>
				<div id="referral">
					<?php 
					if ($num_rows!=0) {
						include 'includes/transactionFeedSorted.php';
					}
					else {
						echo "<p align='center'>No employees were added from the past  " . $numdays . " days</p>";	
					}
				?>
				</div>
				</td>
			</tr>
		</table>
		<div id="export">
			<?php if (isset($_SESSION[admin])) {
			echo "
			<table width='300' border='0' cellpadding='0' cellspacing='0' align='center'>
				<tr>
					<td align='center'><form name='SortTrans' method='post' action='/ExportCSV_TransactionsVIEW.php'>
					<input type='hidden' id='days' name='days' value='$numdays' />
					<input class='Button' type='submit' value='Export View of $num_rows Transactions to .csv' /></form></td>
				</tr>
			</table>";
			}
		?>
			
	</div>
</div>
</body>
</html>	
