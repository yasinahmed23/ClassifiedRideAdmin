<?php
//Connect to Database	
	require_once '../includes/db_config2.php';


if (isset($_POST['search_FullName']) == TRUE && empty($_POST['search_FullName']) == false) 
{

	$search_FullName = (mysql_real_escape_string($_POST['search_FullName']));
	//echo $search_FullName;
	$query= (mysql_query("SELECT DISTINCT `employee` FROM `employees` WHERE `employee` LIKE '$search_FullName%'"));

	while (($row=mysql_fetch_assoc($query)) !== false) 
		{
			echo '<li>', $row['employee'], '</li>';
		}
}
?>


