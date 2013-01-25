<?php
	
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION['user'])) {
	header("location: login_error2.php");
	}	

	//Connect to server
	$dbhost= "ClassifiedRideAd.db.10325553.hostedresource.com";
    	$dbuser= "ClassifiedRideAd";
    	$dbpass="Fernando1!";
    	$db_name="ClassifiedRideAd";

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
