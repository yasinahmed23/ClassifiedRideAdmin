<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Error</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div align="center"><h1>Please Login or Register to Access Database </h1></div>
<div id="top">
<?php include 'includes/headerDealer.php'; ?>
</div>
<div id="container">
	<div id="Dealermain">
		<?php include 'includes/Dealer_main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
	<?php	
	if (!isset($_SESSION[DealerUser])) {
	include 'Forms/DealerSignupForm.php';
	include 'Forms/formValidation.php';
	}
	else {
	include 'includes/contentDealer.php';
	};
	?>
	</div>
</div>	
<br /><br />
</body>
</html>
