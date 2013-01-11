<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: login_error2.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	
	//Get Employee ID from Username
		$GetEmployeeID = mysql_query("
			SELECT employeeID
			FROM  employees
			WHERE EmplUserName='$user'");

		while ($row = mysql_fetch_array($GetEmployeeID)) {
			$employeeID = $row['employeeID'];
		}

	//Get Employee Name from Username
	$GetEmployeeName = mysql_query("
		SELECT employee
		FROM  employees
		WHERE EmplUserName='$user'");

	while ($row = mysql_fetch_array($GetEmployeeName)) {
		$employee = $row['employee'];
	}	
	
	//Count Transactions for User
	$CountTrans = mysql_query("
	SELECT TransactionID
	FROM  transactions
	WHERE eID='$employeeID'
	");
	$num_Trans = mysql_num_rows($CountTrans);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE="text/javascript" SRC="js/verifynotify.js"></SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database Home</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>
<div id="container">
	<div id="main"><?php include 'includes/main.php';?></div>	
	
	<div id="spacer">&nbsp;</div>
	
	<div id="profile">
		<?php echo "<p align='center'><strong>Showing " . $num_Trans . " Transactions for " . $employee . "</p></strong>"; ?>
		
		<div id="dealerlist">
		<?php 
		include 'includes/MyTransaction_feed.php';
		?>
		</div>

		<div id="export">
			<table width="300" border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td><p align="center"><a href="ExportCSV_MyTrans.php">Export all <?php echo $num_Trans; ?> Transactions to .csv</a></p></td>
				</tr>
			</table>
		</div>	
	</div>		
</div>
</body>
</html>