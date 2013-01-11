<?php	
	
	require_once 'Employee_main.php';
	echo "<br />";
	if (!isset($_SESSION[admin])) {
		require_once 'NoAdminAccess.php';
	}
	else {
			require_once('AdminAccess.php');
		}
	
?>

