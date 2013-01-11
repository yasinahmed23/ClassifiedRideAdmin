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
<title>Search | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="autocomplete/searchTransUser.js"></script>
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

		<form action="search_results_TransactionUser.php" method="post">
		<div class="dropdown">
			<font size="-2">Start Typing username to search administrators</font> 	  	
			<input type="text" name="search_string" class="autocomplete">
  
		</div>
		<div class="dropdown">
			<ul class="result"></ul>
			<input type="submit" value="Submit" align="middle">
		</div>
	</div>
	
</form>
</div> 	
</body>
</html>
