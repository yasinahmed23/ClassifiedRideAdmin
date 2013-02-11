<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.8.2.js"></script>
<script src="autocomplete/search.js"></script>
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
		<?php include 'includes/main.php'?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<center><font size="-1"><br />Start typing the employee's lastname... Select from drop-down menu</font>
		<div>&nbsp;</div>
		<form action="search_results_LastName.php" method="post">
			<div class="dropdown"> 	
				<input type="text" id="search_string" name="search_string" class="autocomplete">
			</div>
			<div class="dropdown">
				<ul class="result"></ul>
					<input type="submit" value="Search" align="middle" class="Button">
			</div>
		</form>
		</center>
	</div>
</div> 	
<?php require_once 'includes/footer.php'; ?>
</body>
</html>
