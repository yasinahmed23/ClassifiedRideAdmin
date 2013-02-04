<?php
	$errno = "1";	
	$error = "Your Mom";
	$file = "blah.php";
	$line= "5";
	$context = "Not Good";
	
	$to = "stephmcglathery@gmail.com";
	$subject = "Error";
	$message = "Error # " . $errno . " - " . $error . " / " . $file . "Line # " . $line . " / " . $context;
	$from = "error@ClassifiedRide.com/Admin";
	$headers = "From:" . $from;
	mail($to,$subject,$message,$headers);
?>
