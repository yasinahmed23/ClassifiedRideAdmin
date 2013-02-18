<?php
	
	$dbhost= "";
    	$dbuser= "";
    	$dbpass="";
    	$db_name="";

	//Connect to server
	$connectDB = mysql_connect($dbhost, $dbuser, $dbpass);
	if(!$connectDB) {
		die('Failed to connect to server');
	}

	//Select Database
	$dbselect = mysql_select_db($db_name,$connectDB);
	if(!$dbselect) {
		die('Failed to connect to server');
	}

?>
