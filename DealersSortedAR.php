<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION['ARadmin'])) {
	header("location: login_error_admin.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];

	// create variables out of user input
	$numdays=$_POST['numdays'];	
	
	$GetDealers = mysql_query("
	SELECT DealerID
	FROM dealers
	where TimeRegistered between date_sub(now(),INTERVAL '$numdays' DAY) and now()");
	$num_rows = mysql_num_rows($GetDealers);

	
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
	<?php include 'includes/header_AR.php'; ?> 
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/AR_main.php';
		?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		
		<?php 
		if ($num_rows == 0) {
			echo "<p align='center'><font color='red'>No Dealers have been added in the last " . $numdays . " days</font></p>" ;
		}
		else {
		if (isset($_SESSION[ARadmin])) {
			echo " 
			<p align='center'><font size='+1'><strong>You are viewing the Dealerships added in the past  " . $numdays . " Days</strong>
			</font></p>";	
		}
		?>
		<table width="700" cellpadding="5" cellspacing="0" border="0" class="table" align="center">
			<tr>
				<td>
				<div id="referral">
					<?php 
					include 'includes/DealerFeedSortedAR.php';
					?>
				</div>
				</td>
			</tr>
		</table>
		<?php } ?>
		<div id="export">
			<?php 
				if ($num_rows == 0) {
					echo " " ;
			}
			else {
				if (isset($_SESSION[ARadmin])) {
				echo "
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='ce
	nter'>
					<tr>
						<td align='center'><form name='SortTrans' method='post' action='#'>
						<input type='hidden' id='days' name='days' value='$numdays' />
						<input class='Button' type='submit' value='Export View of $num_rows Dealers to .csv' /></form></td>
					</tr>
				</table>";
				}
			}
		?>
			
	</div>
</div>
</body>
</html>	
