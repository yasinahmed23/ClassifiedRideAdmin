<?php
	
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[ARadmin])) {
	header("location: ../login_error_AR.php");
	}
		
	//Connect to Database	
	require_once '../includes/db_config2.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

	include '../Functions/Functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE="text/javascript" SRC="../js/verifynotify.js"></SCRIPT>
<SCRIPT TYPE="text/javascript" SRC="../js/jquery-1.8.2.js"></SCRIPT>
<script src="../autocomplete/searchFullName.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database AR</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include '../includes/header_AR.php'; ?>           
</div>
<div id="container">	
	<div id="main">
		<?php 
		include '../includes/main.php';
		?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php if (!isset($_SESSION[ARadmin])) {
			echo "
			<table width='400' cellpadding='5' cellspacing='0' align='center' class='table'>
				<tr valign='top'>
					<td>
						<table width='400' cellpadding='0' cellspacing='0' align='center'>
							<tr valign='top'>
								<td align='center'>
								<strong>Please Log in to gain access to Accounts Receivable</strong>
								<?php
								include '../includes/login_form_AR.php' 
								?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>			
			";
			}
		else {
		include '../includes/ARContent.php';
		}
		?>
	</div>
</div>	
<?php require_once '../includes/footer.php'; ?>
</body>
</html>
