<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: login_error2.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';
	require_once 'Functions/Functions.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Training | ClassifiedRide</title>
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
<div id="container">
	<div id="main">
		<?php include 'includes/nav.php'?>
	</div>
	<div id="spacer">&nbsp;</div>	
	<div id="profile">
		
		<center><font size="+1"><strong>TRAINING MATERIALS</strong></font>
		<br />
		<br />
		<embed class="xj_video_embed" wmode="opaque" src="http://static.ning.com/socialnetworkmain/widgets/video/flvplayer/flvplayer.swf?xn_version=3704000907" FlashVars="config=http%3A%2F%2Fclassifiedridetraining.com%2Fvideo%2Fvideo%2FshowPlayerConfig%3Fid%3D6580106%253AVideo%253A727%26ck%3D-%26theme982Version%3D29&video_smoothing=on&autoplay=off&hideShareLink=1&isEmbedCode=1" width="456" height="260" bgColor="#FFFFFF" scale="noscale" allowScriptAccess="always" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"> </embed> <br /><small><a href="http://classifiedridetraining.com/video/video">Find more videos like this on <em>Classified Ride Training</em></a></small><br />
		<!--<table width="290" cellspacing="0" cellpadding="5"  border="1">
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
				<div align="center"><img src="images/confCall.jpg" alt="Conference Call Times"></center>-->
	</div>	
</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>	
