<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[DealerUser])) {
	header("location: login_errorDealer2.php ");
	}
	
	//Connect to Database	
	require_once 'includes/db_configDealers.php';

	$DealerUser = $_SESSION['DealerUser'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dealer Profile</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/headerDealer.php'; ?>
</div>
<div id="container">

	<div id="Dealermain">
		<?php include 'includes/Dealer_main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<table align="center"><tr><td>
		<p><font size="+1"><strong>EDIT PROFILE: </strong></font></p>
		<form action="dealers/change_Dealer_password.php"><input class="Button" type="submit" value="Change Password" /></form>
		<form action="dealers/change_Dealer_Main_Contact.php"><input class="Button" type="submit" value="Change Main Contact" /></form>
		<form action="dealers/change_Dealer_Phone.php"><input class="Button" type="submit" value="Change Phone #" /></form>
		<br />
		<br />
		<form action="#"><input class="Button" type="submit" value="Change Payment Method" /></form>
		<br /><br /></td></tr></table>
		
	</div>
</div>
</body>
</html>
