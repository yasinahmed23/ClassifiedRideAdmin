<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include 'db_config2.php';
	
	$DealerUserName=$_SESSION['DealerUser'];
	$DealerPassword=$_SESSION['DealerPass'];
	
	//Run query - select user from database	
	$sel_user="SELECT * FROM dealers WHERE DealerUserName='$DealerUserName' and DealerPassword='$DealerPassword'";
	$result=mysql_query($sel_user); 
	
	// Count # of rows returned by query
	$count=mysql_num_rows($result);

	//If only one row was returned...
	if ($count==1) {
	
	//Create session variable from data and redirect page
	$_SESSION['DealerUser']=$DealerUserName;	
	header( 'Location: /Dealer_Profile.php' ) ;
	}
?>
