<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[admin])) {
	header("location: login_error_admin.php");
	}
	
	//Connect to Database	
	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	
	require_once 'includes/db_config2.php';

	$NumTotalReferrals = mysql_query("
	SELECT RefID
	FROM Referrals");
	$num_rows = mysql_num_rows($NumTotalReferrals);
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Referrals | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php 
	if (isset($_SESSION[admin])) {
		include 'includes/header_Admin.php'; 
	}
	else {
		include 'includes/header.php'; 
	}
	?>
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/main.php';
		?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php 
		if (isset($_SESSION[admin])) {
			echo "<p align='center'><strong>Total # of Referral Relationships Found:" .  $num_rows . "</strong></p>";	
		}
		?>
		
		<table align="center" cellpadding="10" cellspacing="0" border="0" width="550" class="table">
			<tr valign="top">
				<td>
					<div id="referral">
						<?php include 'includes/referralFeed.php';?>
					</div>
				</td>
			</tr>	
		</table>
		<div id="export">
			<?php if (isset($_SESSION[admin])) {
			echo "
			<table width='300' border='0' cellpadding='0' cellspacing='0' align='center'>
				<tr><td>&nbsp;</td></tr>				
				<tr>
					<td align='center'><form action='/ExportCSV_Referrals.php'><input class='Button' type='submit' value='Export All Referral Data to .csv' /></form></td>
				</tr>
			</table>";
			}
			?>
		</div>	
	</div>
</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>	
