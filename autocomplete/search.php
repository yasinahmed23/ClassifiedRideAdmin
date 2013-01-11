<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION['user'])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once '../includes/db_config.php';

	$user = $_SESSION['user'];
	
	
?>

<?php
if (isset($_POST['search_term']) == TRUE && empty($_POST['search_term']) == false) 
{

	$search_term = (mysql_real_escape_string($_POST['search_term']));
	$query= (mysql_query("SELECT DISTINCT `EmplLastName` FROM `employees` WHERE `EmplLastName` LIKE '$search_term%'"));

	while (($row=mysql_fetch_assoc($query)) !== false) 
		{
			echo '<li>', $row['EmplLastName'], '</li>';
		}
}
?>


