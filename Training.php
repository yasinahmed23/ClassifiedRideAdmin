<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: login_error2.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employees | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/Employee_main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>	
	<div id="profile">
		
		<center><font size="+1"><strong>TRAINING MATERIALS</strong></font>
		<br />
		<table width="290" cellspacing="0" cellpadding="5"  border="1">
			<tr>
				<td>
				<font size="=1"><strong>SALES PROCESSES</strong></font>
				<ol>
					<li>
						<p><a href="PDFs/GuideToSendingEmails.pdf" target="_blank">Send Email</a></p>
							<ul>
								<li><p><a href="PDFs/SpamWords.pdf" target="_blank">List of Spam Words To Avoid</a></p></li>
							</ul>
					</li>
					<li><p><a href="#">Follow-up Phone Call</a></p></li>
					<li><p><a href="#">Fax</a></p></li>
				</ol>
				</td>
			</tr>
		</table>
		<br />
		<p>&bull;&nbsp;<a href="PDFs/Commission.pdf" target="_blank">Commission Schedule</a></p>
		<p>&bull;&nbsp;<a href="http://classifiedridetraining.com/" target="_blank">Paid Training Access</a></p>
				<br /><br />
				<div align="center"><img src="images/confCall.jpg" alt="Conference Call Times"></center>
	</div>	
</div>
</body>
</html>	
