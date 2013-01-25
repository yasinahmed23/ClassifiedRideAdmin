<?php 

$extension = end(explode(".", $_FILES["ConfidentialityAgreement"]["name"]));
if ((($_FILES["ConfidentialityAgreement"]["type"] == "image/gif")
|| ($_FILES["ConfidentialityAgreement"]["type"] == "image/jpeg")
|| ($_FILES["ConfidentialityAgreement"]["type"] == "image/png")
|| ($_FILES["ConfidentialityAgreement"]["type"] == "image/pjpeg"))
|| ($_FILES["ConfidentialityAgreement"]["type"] == "application/pdf")
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["ConfidentialityAgreement"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["ConfidentialityAgreement"]["error"] . "<br />";
    }
  else
    {
	$path=$_FILES["ConfidentialityAgreement"]["tmp_name"];	
	$filename = (pathinfo($path, PATHINFO_BASENAME));
	$name = (pathinfo($path, PATHINFO_FILENAME));	
	$new_filename = "ConfidentialityAgreement_" . $user . "." . $extension;

	//move file into directory	
	move_uploaded_file($_FILES["ConfidentialityAgreement"]["tmp_name"], "NewHireUploads/" . $new_filename);
    }
  }
else
  {
  
  }
?>
