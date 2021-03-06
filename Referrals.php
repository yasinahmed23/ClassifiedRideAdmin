<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[admin])) {
	header("location: login_error_admin.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config2.php';
	require_once 'Functions/AdminFunctions.php';	
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
		<?php include 'includes/nav.php';
		?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php 
		if (isset($_SESSION[admin])) {
			echo "<p align='center'><strong>Total # of Referral Relationships Found:" .  $num_Referrals . "</strong></p>";	
		}
		?>
		
		<table align="center" cellpadding="10" cellspacing="0" border="0" width="600" class="table">
			<tr valign="top">
				<td>
					<div id="referral">
						<table cellpadding="0" cellspacing="0" border="0" align="center">
							<tr valign="top">
								<td>
								<?php
								GetReferrals();
								?>
								</td>
							</tr>
						</table>						
					</div>
				</td>
			</tr>	
		</table>
		<div id="export">	
			<?php
			if (isset($_SESSION[admin])) {
			?>
			<table width="300" border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td><center><form action='/ExportCSV_Referrals.php'><input class='Button' type='submit' value='Export All  <?php echo $num_Referrals; ?> Referrals' /></form></center></td>
				</tr>
			</table>
			<?php } ?>
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>	
