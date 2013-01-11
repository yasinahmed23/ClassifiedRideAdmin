<?php 

$extension = end(explode(".", $_FILES["w9"  ]["name"]));
if ((($_FILES["w9"  ]["type"] == "image/gif")
|| ($_FILES["w9"  ]["type"] == "image/jpeg")
|| ($_FILES["w9"  ]["type"] == "image/png")
|| ($_FILES["w9"  ]["type"] == "image/pjpeg"))
|| ($_FILES["w9"  ]["type"] == "application/pdf")
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["w9"  ]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["w9"  ]["error"] . "<br />";
    }
  else
    {
	$path=$_FILES["w9"  ]["tmp_name"];	
	$filename = (pathinfo($path, PATHINFO_BASENAME));
	$name = (pathinfo($path, PATHINFO_FILENAME));	
	$new_filename3 = "w9_" . $user . "." . $extension;
	
	//move file into directory	
	move_uploaded_file($_FILES["w9"  ]["tmp_name"], "NewHireUploads/" . $new_filename3);
    }
  }
else
  {
  
  }
?>
