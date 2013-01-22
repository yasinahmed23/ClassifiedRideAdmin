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
			<?php echo "Dealer Transaction Search Results"?></strong></font>
		</div>
		<table width="700" cellpadding="5" cellspacing="0" border="0" class="table" align="center">
			<tr>
				<td>
				<div id="referral">
					<table cellpadding="5" cellspacing="0" border="0" align="center">
						<tr valign="top">
							<td align="center"><strong>Date/Time</strong></td>		
							<td align="center"><strong>Trans ID</strong></td>				
							<td align="center"><strong>Dealership</td>
							<td align="center"><strong>Registered</td>
							<td align="center"><strong>Renewed</td>
							<td align="center"><strong>Representative</strong></td>
							<td align="center"><strong>Commission</td>
							<td align="center"><strong>Manager</td>
							<td align="center"><strong>Referral</td>
						</tr>

					<?php

					//Get data from database and assign to a variable

					$DealerName= $_POST['search_string'];

					$sql = mysql_query("
						SELECT *
						FROM  transactions
						WHERE DealerName='".$DealerName."'");

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
					$ReferralAmount = $row['ReferralAmount'];
					?>
	
					<!--Disply data from database into a table -->
						<tr valign='top'>
							<td colspan='9' align='center'><hr /></td>
						</tr>
						<tr valign="top">
							<td align="center"><p><?php echo $TransactionDate;?></p></td>		
							<td align="center"><p><?php echo $TransactionID;?></p></td>
							<td align="center"><p>
							<?php 
							//Get Employee Referal's Email
								$GetDealerEmail = mysql_query("
									SELECT DealerEmail 	
									FROM dealers
									WHERE DealerName ='".$DealerName."' ");
								while ($row = mysql_fetch_array($GetDealerEmail)) {
									$DealerEmail = $row['DealerEmail'];
									}
							echo "<p><a href='mailto:$DealerEmail'>" . $DealerName . "</a></p>";
							?>
							</p></td>
							<td align="center"><p>
								<?php			
								if (empty($registered)) {
					    				echo "----";
								} else {
					    				echo "$" . $registered;
								}

								?></p></td>		
							<td align="center"><p>
							<?php			
							if (empty($Renewed)) {
				    				echo "----";
							} else {
				    				echo "$" . $Renewed;
							}

							?></p></td>
							<td align="center" width="75">
							<?php 
							//Get Dealer Rep's Email
								$GetRepsEmail = mysql_query("
									SELECT EmplEmail 	
									FROM employees 
									WHERE employee ='".$employee."' ");
								while ($row = mysql_fetch_array($GetRepsEmail)) {
									$EmplEmail = $row['EmplEmail'];
									}
							echo "<p><a href='mailto:$EmplEmail'>" . $employee . "</a></p>";
							?>
							</td>
							<td align="center"><p>
								<?php			
								if (empty($Commission)) {
					    				echo "";
								} else {
					    				echo "$" . $Commission;
								}
								?>
								</p>
							</td>
							<td align="center" width="75">
							<?php 
							//Get Employee Referal's Email
								$GetRefEmail = mysql_query("
									SELECT EmplEmail 	
									FROM employees 
									WHERE employee ='".$EmplReferral."' ");
								while ($row = mysql_fetch_array($GetRefEmail)) {
									$EmplEmail = $row['EmplEmail'];
									}
							echo "<p><a href='mailto:$EmplEmail'>" . $EmplReferral . "</a></p>";
							?>
							</td>
							<td align="center">
							<?php			
							if (empty($ReferralAmount)) {
				    				echo "----" ;
							} else {
								echo "<p>$" . $ReferralAmount . "</p>";
							}
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
	<div id="export">
		<table width="300" border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td><p align="center"><a href="#">Export Search Results</a></p></td>
			</tr>
		</table>
	<div>	
	</div>
</div>
</body>
</html>
