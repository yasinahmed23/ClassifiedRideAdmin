<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once '../includes/db_config.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

	$DealerName=$_POST['DealerName'];
	$Notes=$_POST['Notes'];

	$AddNote= "
		UPDATE dealers 
		SET Notes='$Notes'
		WHERE DealerName='$DealerName'";

	$result=mysql_query($AddNote);

	if (!$result) {
    		die('Query Error');
		}

	header( 'Location: /AccountsReceivable/index.php' ) ;
	
	
?>
