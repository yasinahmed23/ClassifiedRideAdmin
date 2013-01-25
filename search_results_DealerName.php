<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];

	$sql = mysql_query("
		SELECT *
		FROM dealers
		WHERE DealerName='".$DealerName."'");


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
		<center><font size="+2"><strong><?php echo "Dealer Search Results"?></strong></font></center>
		<?php 
			$count=mysql_num_rows($sql);
			if ($count==1) {
			?>
			<table cellpadding="5" cellspacing="0" border="0" align="center" class="table">
				<tr valign="top">
					<td>
					<div id="dealerlist">
						<table cellpadding="5" cellspacing="0" border="0" align="center">
							<tr valign="top">
								<td align="center"><p><strong>ID</strong></td>		
								<td align="center"><p><strong>Time Registered</strong></td>				
								<td align="center"><p><strong>Dealership</strong></td>	
								<td align="center"><p><strong>City</strong></td>		
								<td align="center"><p><strong>State</strong></td>
								<td align="center"><p><strong>Contact Person</td>
								<td align="center"><p><strong>Phone Number</td>
								<td align="center"><p><strong>Representative</td>
							</tr>

						<?php
						//Get data from database and assign to a variable

						$DealerName= $_POST['search_string'];

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
								<td align="center"><p><?php echo $DealerID;?></p></td>		
								<td align="center"><p><?php echo $TimeRegistered;?></p></td>
								<td align="center"><p><?php echo $DealerName;?></p></td>		
								<td align="center"><p><?php echo $DealerCity;?></p></td>
								<td align="center"><p><?php echo $DealerState;?></p></td>
								<td align="center" width="75"><p><a href="mailto:<?php echo $DealerEmail; ?>"><?php echo $DealerContact;?></a>
				
								</p></td>
								<td align="center"><p><?php echo $DealerContactPhone;?></p></td>
								<td align="center" width="75">
								<?php 
								//Get Dealer Rep's Email
									$GetRepsEmail = mysql_query("
										SELECT EmplEmail 	
										FROM employees 
										WHERE employee ='".$RepName."' ");
									while ($row = mysql_fetch_array($GetRepsEmail)) {
										$EmplEmail = $row['EmplEmail'];
										}
								echo "<p><a href='mailto:$EmplEmail'>" . $RepName . "</a></p>";
								?>
								</td>
							</tr>
						<?php } 
						?>					
						</table>
					</div>
				</td>
			</tr>
		</table>
		<?php }

		else {
		echo "<p align='center'><font color='red'>No Results Found.  Please Select from the Drop-Down to ensure accuracy</font></p>";
		}
		?>
	</div>
</div>
</body>
</html>
