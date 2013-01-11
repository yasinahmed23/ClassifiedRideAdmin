<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: login_error2.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	//echo $user;


//Get Employee ID from Username
$GetEmployee = mysql_query("
	SELECT employee
	FROM employees
	WHERE EmplUserName='$user' ");

while ($row = mysql_fetch_array($GetEmployee)) {
	$employee = $row['employee'];
}

//Count Dealerships for User
$CountDeal = mysql_query("
	SELECT DealerID
	FROM dealers
	WHERE RepName='$employee' ");
$num_rows = mysql_num_rows($CountDeal);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dealer Profile | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/Employee_main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php
		//Get data from database and assign to a variable
		$sql = mysql_query("
			SELECT *
			FROM dealers
			WHERE RepName='$employee'
			ORDER BY DealerName ASC");

		if ( $num_rows == 0 ){
		echo "<center><font color='red'>You have not signed any dealerships!</font></center>"; 
		}
		else {
		?>

		<?php echo "<p align='center'><strong>Showing " . $num_rows . " Dealerships for " . $employee . "</p></strong>"; ?>
		<div id="dealerlist">
		<table cellpadding="7" cellspacing="0" border="0" align="center" width="850" class="table">
			<tr>
				<td align="center"><strong>ID</strong></td>		
				<td align="center"><strong>Time Registered</strong></td>				
				<td align="center"><strong>DealerName</strong></td>	
				<td align="center"><strong>DealerCity</strong></td>		
				<td align="center"><strong>DealerState</strong></td>
				<td align="center"><strong>DealerEmail</td>
				<td align="center"><strong>Main Contact</td>
				<td align="center"><strong>Main Contact's Job Title </td>
				<td align="center"><strong>Phone Number</td>
			</tr>
			<?php
			while ($row = mysql_fetch_array($sql)) {
			$DealerID = $row['DealerID'];
			$TimeRegistered = $row['TimeRegistered'];
			$DealerName = $row['DealerName'];
			$DealerCity = ($row['DealerCity']);
			$DealerState = $row['DealerState'];
			$DealerEmail = $row['DealerEmail'];
			$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
			$ContactPosition = $row['ContactPosition'];
			$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
			$RepName = $row['RepName'];
			?>

			<!--Disply data from database into a table -->
			<tr valign="top">
				<td colspan="9" align="center"><hr /></td>
			</tr>
			<tr>
				<td align="center"><?php echo $DealerID;?></td>		
				<td align="center"><?php echo $TimeRegistered;?></td>
				<td align="center"><?php echo $DealerName;?></td>		
				<td align="center"><?php echo $DealerCity;?></td>
				<td align="center"><?php echo $DealerState;?></td>
				<td align="center"><a href="mailto:<?php echo $DealerEmail; ?>"><?php echo $DealerEmail;?></a>
		
				</td>
				<td align="center"><?php echo $DealerContact;?></td>
				<td align="center"><?php echo $ContactPosition;?></td>
				<td align="center"><?php echo $DealerContactPhone;?></td>
			</tr>
			<?php }  
			?>
		</table>
<?php } ?>
	</div>
	<div id="export">
		<table width="300" border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td><p align="center"><a href="ExportCSV_MY-Dealers.php">Export all <?php echo $num_rows; ?> of  my Dealers to .csv</a></p></td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>	
