<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'includes/db_config.php';
	
	// create variables out of user input
	$ARusername=$_POST['ARusername']; 
	$ARpassword=$_POST['ARpassword'];

	// Protect MySQL injection
	$ARusername = stripslashes($ARusername);
	$ARpassword = stripslashes($ARpassword);
	$ARusername = mysql_real_escape_string($ARusername);
	$ARpassword = mysql_real_escape_string($ARpassword);

	$ARpassword= hash( 'sha256', $ARpassword );	
	
	//Run query - select user from database	
	$sel_user="SELECT * FROM AccountsReceivable WHERE ARusername='$ARusername' and ARpassword='$ARpassword'";
	$result=mysql_query($sel_user); 
	
	// Count # of rows returned by query
	$count=mysql_num_rows($result);

	//If only one row was returned...
	if ($count==1) {
	
	//Create session variable from data and redirect page
	$_SESSION['ARadmin']=$ARusername;

	header( 'Location: AccountsReceivable/index.php' ) ;
	}
	else {
		header( 'Location: login_error_AR.php' ) ;
	}

?>
