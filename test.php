<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	require_once 'includes/db_config2.php';
	require_once 'Functions/Functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="autocomplete/searchFullName.js"></script>
<script type="text/javascript" src="js/verifynotify.js"></script>
<style>
#EmplUserName{
}
#tick{display:none}
#cross{display:none}
</style>
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
		<?php 
		include 'includes/main.php';
		?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<table width="950" border="1">
			<tr valign="top"><td>&nbsp;</td></tr>
		</table>
	</div>
</div>	
<?php require_once 'includes/footer.php'; ?>
</body>
</html>
