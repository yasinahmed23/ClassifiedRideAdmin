<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	include 'includes/db_config.php';

	$user = $_SESSION['user'];


$dir = 'NewHireUploads';
 if ( !file_exists($dir) ) {
  mkdir ($dir, 0777);
 }

$allowedExts = array("jpg", "jpeg", "gif", "png", "pdf");
include 'includes/Upload_ConfAgreementProces.php';
include 'includes/Upload_IndContractAgreementProces.php';
include 'includes/Upload_w9Proces.php';
//write filename to database
mysql_query("UPDATE employees SET ConfidentialityAgreement='".$new_filename."'
WHERE EmplUserName='".$user."'");

mysql_query("UPDATE employees SET IndependentContractorAgreement='".$new_filename2."'
WHERE EmplUserName='".$user."'");

mysql_query("UPDATE employees SET w9 ='".$new_filename3."'
WHERE EmplUserName='".$user."'");

//SEND NEW HIRE NOTIFICATION VIA EMAIL
		$to = "classifiedrideemployment@gmail.com";
		$subject = $employee . " Uploaded New Hire Paperwork";
		$message = "
		New Hire Paperwork Uploaded: " . $employee . "!" ;
		$from = "classifiedrideemployment@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);

header( 'Location: NewHireFilesUploaded.php' ) ;
?>
