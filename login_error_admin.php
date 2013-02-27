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
<title>Admin Login Error</title>
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
<br />
<div id="container">
	<div id="main">
		<?php include 'includes/nav.php';
		?>
	</div>
	<div id="employees">
		<?php echo "<p align='center'>Please Login as Admin to View That Page</p>";
		?>
		
		<table align="center" cellspacing="0" cellpadding="0">
			<tr valign="top">
				<td>
				<strong>ADMIN ACCESS</strong>
				<?php include 'includes/login_form_admin.php'; ?>
				</td>
			</tr>
		</table>	
	</div>
	
	
</div>	
<br /><br />
</body>
</html>
