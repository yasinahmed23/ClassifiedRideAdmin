<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	include 'includes/db_config.php';

	//$user = $_SESSION['user'];
	$user = "stephmcglathery";
?>
<?php
$path = "uploads/image.jpg";

echo "<br />";
print_r(pathinfo($path));

echo "<br /><br />";

$filename = (pathinfo($path, PATHINFO_BASENAME));
echo "<br />" . "Filename: " . $filename;
$extension = (pathinfo($path, PATHINFO_EXTENSION));
//echo "<br />" . "extension: " . $extension;
$name = (pathinfo($path, PATHINFO_FILENAME));
//echo "<br />" . "name: " . $name;
$new_filename = $user . "." . $extension;
echo "<br />" . "New Filename: " . $new_filename; 

?>
<?php 
//write filename to database
mysql_query("UPDATE members SET pic='".$new_filename."'
WHERE username='".$user."'");
?>

