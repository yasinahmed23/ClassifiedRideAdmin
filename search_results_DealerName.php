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
		<td align="center"><strong>ID</strong></td>		
		<td align="center"><strong>Time Registered</strong></td>				
		<td align="center"><strong>Dealership</strong></td>	
		<td align="center"><strong>City</strong></td>		
		<td align="center"><strong>State</strong></td>
		<td align="center"><strong>Email</td>
		<td align="center"><strong>Contact Person</td>
		<td align="center"><strong>Phone Number</td>
		<td align="center"><strong>Representative</td>
	</tr>

<?php

//Get data from database and assign to a variable

$DealerName= $_POST['search_string'];

$sql = mysql_query("
	SELECT *
	FROM dealers
	WHERE DealerName='".$DealerName."'
");

while ($row = mysql_fetch_array($sql)) 
{
$DealerID = $row['DealerID'];
$TimeRegistered = $row['TimeRegistered'];
$DealerCity = ($row['DealerCity']);
$DealerState = $row['DealerState'];
$DealerEmail = $row['DealerEmail'];
$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
$RepName = $row['RepName'];


?>
	
<!--Disply data from database into a table -->
	<tr valign='top'>
		<td colspan='9' align='center'><hr /></td>
	</tr>
	<tr valign="top">
		<td align="center"><?php echo $DealerID;?></td>		
		<td align="center"><?php echo $TimeRegistered;?></td>
		<td align="center"><?php echo $DealerName;?></td>		
		<td align="center"><?php echo $DealerCity;?></td>
		<td align="center"><?php echo $DealerState;?></td>
		<td align="center"><a href="mailto:<?php echo $DealerEmail; ?>"><?php echo $DealerEmail;?></a>
				
		</td>
		<td align="center"><?php echo $DealerContact;?></td>
		<td align="center"><?php echo $DealerContactPhone;?></td>
		<td align="center"><?php echo $RepName;?></td>
	</tr>
<?php } 
?>


</table>
</div>


			
	</div>
</div>
</body>
</html>
