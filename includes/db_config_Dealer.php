<?php
	
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION['DealerUser'])) {
	header("location: /login_error_Dealer.php");
	}	

	//Connect to server
	$dbhost= "";
    	$dbuser= "";
    	$dbpass="";
    	$db_name="";

	$connectDB = mysql_connect($dbhost, $dbuser, $dbpass);
	if(!$connectDB) {
		die('Failed to connect to server ');
	}

	//Select Database
	$dbselect = mysql_select_db($db_name,$connectDB);
	if(!$dbselect) {
		die('Failed to connect to server');
	}
?>
