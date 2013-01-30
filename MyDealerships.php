<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: login_error2.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';
	require_once 'Functions/Functions.php';


while ($row = mysql_fetch_array($GetEmployeeName)) {
	$employee = $row['employee'];
}
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
		<?php 
		include 'includes/main.php';
		?>
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

		if ( $numDealersUser == 0 ){
		echo "<center><font color='red'>You have not signed any dealerships!</font></center>"; 
		}
		else {
		?>

		<?php echo "<p align='center'><strong>Showing " . $numDealersUser . " Dealerships for " . $employee . "</p></strong>"; ?>

		<table width="700" cellpadding="5" cellspacing="0" border="0" class="table" align="center">
			<tr>
				<td>
				<div id="referral">	
				<?php include 'includes/MyDealerFeed.php' ; ?>
				<?php } ?>
				</div>
				</td>
			</tr>
		</table>
		<div id="export">
			<table width="300" border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td><p align="center"><a href="ExportCSV_MY-Dealers.php">Export all <?php echo $numDealersUser; ?> of  my Dealers to .csv</a></p></td>
				</tr>
			</table>
		</div>	
	</div>
</div>	
<?php require_once 'includes/footer.php'; ?>
</html>
