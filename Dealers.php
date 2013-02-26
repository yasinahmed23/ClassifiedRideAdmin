<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	require_once 'includes/db_config2.php';
	require_once 'Functions/DealerFunctions.php';
	require_once'Functions/dbConnector.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dealers | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" title="Style CSS" href="styles/calendar.css" type="text/css" media="all" />
<script type="text/javascript">
  var formatSplitter = "/";
  var monthFormat = "mm";
  var yearFormat = "yyyy";
</script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="autocomplete/searchFullName.js"></script>
<script type="text/javascript" src="js/verifynotify.js"></script>

<style>
#DealerUserName{
}

#tick{display:none}
#cross{display:none}

#tick2{display:none}
#cross2{display:none}

#tick3{display:none}
#cross3{display:none}
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
			if (!isset($_SESSION[DealerUser])) {?>
				<table width="700" cellpadding="10" cellspacing="0" border="0" class="table" align="center">
					<tr>
						<td>
						<div id="RegistrationForm">
							<table border="0" align="center" cellpadding="0" cellspacing="0" width="700">
								<tr valign="top">
									<td colspan="2"><font size="+1"><strong>Dealer Registration Form</strong></font></td>
								</tr>
								<tr>
									<td colspan="2"><hr /></td>
								</tr>
							</table>
							<?php if (!ae_detect_ie()) {  
								echo "<p align='center'>Please use Internet Explorer to register.  <br /><br /><em>(Currently our Merchant Services Company is in transition<br /> & doesn't provice support for other browsers at the moment.  They tell us it will be enabled soon!)</em><br /><br />We apologize for any inconvenience.  If you are already registered, you may login in any browser.<br /><br />";
								echo "<table align='center'><tr><td align='center'";
								include 'includes/Dealer_login_form.php';
								echo "</td></tr></table></p>";
							}
							else {
								include 'Forms/DealerSignupForm.php';
								include 'Forms/formValidationDealer.php';
							}
							?>			
						</div>
						</td>
					</tr>
				</table>
				<?php }							
			else {
				include 'includes/contentDealer.php';
			}
		?>
	</div>
</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>

