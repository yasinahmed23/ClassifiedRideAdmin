<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Results | ClassifiedRide</title>
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
		<div align="center">
			<font size="+2"><strong>
			<?php echo "Dealer Search Results"?></strong></font>
		</div>
		<div class="DealerFeed">
<table cellpadding="10" cellspacing="0" border="0" align="center" class="table">
	<tr valign="top">
		<td align="center"><strong>Date/Time</strong></td>		
		<td align="center"><strong>Trans ID</strong></td>				
		<td align="center"><strong>Employee</strong></td>		
		<td align="center"><strong>Dealership</td>
		<td align="center"><strong>Registered</td>
		<td align="center"><strong>Renewed</td>
		<td align="center"><strong>Referral</td>
		<td align="center"><strong>Commission</td>
	</tr>

<?php

//Get data from database and assign to a variable

$DealerName= $_POST['search_string'];

$sql = mysql_query("
	SELECT *
	FROM  transactions
	WHERE DealerName='".$DealerName."'
");

while ($row = mysql_fetch_array($sql)) 
{
$TransactionDate = $row['TransactionDate'];
$TransactionID = $row['TransactionID'];
$eID = ($row['eID']);
$employee = $row['employee'];
$DealerID = $row['DealerID'];
$DealerName = $row['DealerName'];
$member = $row['member'];
$registered = $row['registered'];
$EmplReferral = $row['EmplReferral'];
$Renewed = $row['Renewed'];
$Commission = $row['Commission'];
?>
	
<!--Disply data from database into a table -->
	<tr valign='top'>
		<td colspan='9' align='center'><hr /></td>
	</tr>
	<tr valign="top">
		<td align="center"><?php echo $TransactionDate;?></td>		
		<td align="center"><?php echo $TransactionID;?></td>
		<td align="center"><?php echo $employee;?></td>
		<td align="center"><?php echo $DealerName;?></td>
		<td align="center"><?php			
					if (empty($registered)) {
		    				echo "";
					} else {
		    				echo "$" . $registered;
					}

					?></td>		
		<td align="center"><?php			
					if (empty($Renewed)) {
		    				echo "";
					} else {
		    				echo "$" . $Renewed;
					}

					?></td>
		<td align="center"><?php echo $EmplReferral;?></td>
		<td align="center"><?php			
					if (empty($Commission)) {
		    				echo "";
					} else {
		    				echo "$" . $Commission;
					}

					?></td>
	</tr>
<?php } 
?>


</table>
</div>


			
	</div>
</div>
</body>
</html>
