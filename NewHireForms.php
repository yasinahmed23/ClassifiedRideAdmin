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
<title>Upload New Hire Forms</title>
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
	echo "<center><em>You have already uploaded your New Hire Paperwork</em></center>";
	include 'includes/New_Hire_Content.php';
	}
	else {
	echo "<center><font color='#FF0000'><strong><em>You have not uploaded your New Hire Paperwork yet! You need to do this to get paid!</em></center></strong></font>";
	include 'includes/New_Hire_Content.php';
	}
?>
	</div>
</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>
