<?php
	//Enable Session Variables	
	session_start();
	$DealerUser = $_SESSION['DealerUser'];
	
	//Connect to Database	
	require_once 'includes/db_config2.php';
	require_once 'Functions/DealerFunctions.php';
	require_once 'Functions/dbConnector.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div id="top">
	<?php include 'includes/headerDealer.php'; ?>
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/Dealer_main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<form id="Forgot_Password_Form" name="Change_Password_Form" method="post" action="../dealers/reset_Dealer_password_process.php">
			<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
			      		<td>
						<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr valign="top">
								<td colspan="2" align="center"><strong>Enter your email address associated with this account</strong></td>
							</tr>
							<tr><td colspan="2">&nbsp;</td></tr>
						    	<tr>
							     	<td colspan="2" align="center">Email:<INPUT TYPE="email" NAME="email" class="textfield" size="20"></td>
						    	</tr>
							<tr><td colspan="2">&nbsp;</td></tr>
						    	<tr>
							      	<td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" /></td>
							</tr>
							<tr>
								<td colspan="2">&nbsp;</td>
						    	</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div> 	
</body>
</html>
