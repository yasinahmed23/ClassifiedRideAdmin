<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: login_error2.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	//echo $user;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee Profile</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>
<div id="container">

	<div id="main">
		<?php include 'includes/main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
	
	<?php
	$GetNewHireInfo = mysql_query("
	SELECT ConfidentialityAgreement, IndependentContractorAgreement, w9
	FROM  employees
	WHERE EmplUserName='$user'
	");

	while ($row = mysql_fetch_array($GetNewHireInfo)) 
	{
		$ConfidentialityAgreement = $row['ConfidentialityAgreement'];
		$IndependentContractorAgreement = $row['IndependentContractorAgreement'];
		$w9= $row['w9'];
	}

	if(!($ConfidentialityAgreement == NULL)&& !($IndependentContractorAgreement == NULL) && !($w9 == NULL))
	{
	echo "<center>Thank you, your New Hire Paperwork was successfully updated<center><br /><br />";
	echo "
	<div id='profile'>
	<center><font size='+1'><strong>MY PROFILE</strong></font></center>	
	<br />";
	include 'includes/profile.php';
	echo "</div>";

	}
	else {
	echo "There was a problem saving your files.";
	}
?>
</div>
</body>
</html>
