<?php 

$extension = end(explode(".", $_FILES["IndependentContractorAgreement" ]["name"]));
if ((($_FILES["IndependentContractorAgreement" ]["type"] == "image/gif")
|| ($_FILES["IndependentContractorAgreement" ]["type"] == "image/jpeg")
|| ($_FILES["IndependentContractorAgreement" ]["type"] == "image/png")
|| ($_FILES["IndependentContractorAgreement" ]["type"] == "image/pjpeg"))
|| ($_FILES["IndependentContractorAgreement" ]["type"] == "application/pdf")
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["IndependentContractorAgreement" ]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["IndependentContractorAgreement" ]["error"] . "<br />";
    }
  else
    {
	$path=$_FILES["IndependentContractorAgreement" ]["tmp_name"];	
	$filename = (pathinfo($path, PATHINFO_BASENAME));
	$name = (pathinfo($path, PATHINFO_FILENAME));	
	$new_filename2 = "IndependentContractorAgreement_" . $user . "." . $extension;
	
	//move file into directory	
	move_uploaded_file($_FILES["IndependentContractorAgreement" ]["tmp_name"], "NewHireUploads/" . $new_filename2);
    }
  }
else
  {
  
  }
?>
