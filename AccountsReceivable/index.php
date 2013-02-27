<?php
	//Enable Session Variables	
	session_start();

	//Connect to Database	
	require_once '../includes/db_config.php';
	require_once '../Functions/ARFunctions.php';
?>
<!DOCtype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="../js/verifynotify.js"></script>
<script type="text/javascript" src="../js/jquery-1.8.2.js"></script>
<script src="../autocomplete/searchFullName.js"></script>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database AR</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php if (isset($_SESSION[admin])) {
		include '../includes/header_Admin.php';
	}
	else if (!isset($_SESSION[ARadmin])) {
		include '../includes/header.php';
	}
	else {
	include '../includes/header_AR.php'; 
	}
	?>
</div>
<div id="container">	
	<div id="main">
		<?php 
		include '../includes/nav.php';
		?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php if (!isset($_SESSION[ARadmin])) {
			echo "
			<table width='400' cellpadding='0' cellspacing='0' align='center' class='table'>
				<tr valign='top'>
					<td>
						<table width='400' cellpadding='0' cellspacing='0' align='center'>
							<tr valign='top'>
								<td align='center'>
								<strong>Please Log in to gain access to Accounts Receivable</strong>";
								include '../includes/login_form_AR.php';
								
							echo "</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>";
			}
		else {
		echo "
			<form id='SortTrans' name='SortTrans' method='post' action='/DealersSortedAR.php'>
				<p align='center'><font size='+1'><strong>Total # of Dealerships : " .  $numDealers . "</strong>&nbsp;-&nbsp;View Dealers added in last  <input name='numdays' type='text' class='textfield' id='numdays' size='3' maxlength='3'/> Days. <input name='submit' type='submit' class='Button' id='submit' value='GO' />
				</font></p>
			</form>
			<table width='900' cellpadding='0' cellspacing='0' align='center' class='table' border='0'>
				<tr valign='top'>
					<td>";
					include '../includes/ARContent.php';
					echo "</td>
				</tr>
			</table>";
		}
		?>
	</div>
</div>	
<?php require_once '../includes/footer.php'; ?>
</body>
</html>
