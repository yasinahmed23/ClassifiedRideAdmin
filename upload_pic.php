<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	include 'includes/db_config.php';

	$user = $_SESSION['user'];

$dir = 'uploads';

 // create new directory with 777 permissions if it does not exist yet
 // owner will be the user/group the PHP script is run under
 if ( !file_exists($dir) ) {
  mkdir ($dir, 0777);
 }

$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
   // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    //echo "Type: " . $_FILES["file"]["type"] . "<br />";
   // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	//	echo "<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    //if (file_exists("uploads/" . $_FILES["file"]["name"]))
    //  {
   //   echo $_FILES["file"]["name"] . " already exists. ";
   //   }
   // else
   //   {
	//rename file 
	$path=$_FILES["file"]["tmp_name"];	
	$filename = (pathinfo($path, PATHINFO_BASENAME));
	$name = (pathinfo($path, PATHINFO_FILENAME));	
	$new_filename = $user . "." . $extension;
	
	//write filename to database
mysql_query("UPDATE employees SET pic='".$new_filename."'
WHERE EmplUserName='".$user."'");

	//move file into directory	
	move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $new_filename);
      /*echo "Thank you for updating your profile pic: Please close this window";	
	echo "<br />Temp Path: " .  $path;	
	echo "<br />Old Filename: " .  $filename;	
	echo "<br />New Filename: " .  $new_filename;*/
     // }
	header("location: index.php");
    }
  }
else
  {
  echo "Invalid file";
  }
	
?>

