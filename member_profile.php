<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
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
<title>Member Profile</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="logo"><h1>My Profile</h1></div>
<div id="login">
<?php
echo $user . " you are logged in.";
?>
</div>	
<div id="container">

	<div id="blog">
		<?php include 'includes/blog_content.php'?>
	</div>

	<div id="profile">
		<?php include 'includes/profile.php'?>
		<br />
		<form action="blogs.php" name="blogs" id="blogs">
			<input class="textfield" type="submit" value="All Blogs" id="all_blogs" name="all_blogs" />
		</form>
		<?php include 'includes/main.php'?>
	</div>
</div>
<div id="footer">
<a href="about/about_member_profile.php" target="_blank">About this page</a>
<br />
&nbsp;
</div>
</body>
</html>
