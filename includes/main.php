<?php	
	if (!isset($_SESSION[admin])) {
	require_once 'Employee_main.php';
	echo "<br />";
		require_once 'NoAdminAccess.php';
	}
	else {
			require_once('AdminAccess.php');
		}
	
?>

