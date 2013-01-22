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
<title>Login Error</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<div id="logo">
		<h1>Welcome to the ClassifiedRide Employee/Dealer Database</a></h1>
	</div>
		
	<div id="login">
	<?php	
		if (!isset($_SESSION[user])) {
			include 'includes/login_form.php';
			}
		else {echo $user . " you are logged in.";
		echo "<br />";
		echo "<center><form action='logout.php' onSubmit='alert('You are now logged out');' name='logout' id='logout'><input class='textfield' type='submit' value='Log Out' id='logout' name='logout' /></form></center>";}
			
	?>
	</div>
</div>
<br />
<div id="container">
	<div id="main">
		<?php include 'includes/main.php';
		?>
	</div>
	<div id="employees">
		<?php echo "<p align='center'>Please Login as AR Admin to View This Page</p>";
		?>
		
		<table align="center" cellspacing="0" cellpadding="0">
			<tr valign="top">
				<td>
				<strong>AR ADMIN ACCESS</strong>
				<?php include 'includes/login_form_AR.php'; ?>
				</td>
			</tr>
		</table>	
	</div>
	
	
</div>	
<br /><br />
</body>
</html>
