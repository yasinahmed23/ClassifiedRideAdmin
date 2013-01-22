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
		<center><font size="+2"><strong><?php echo "Employee Transaction Search Results"?></strong></font></center>
		<?php
			//Count Transactions for selected employee
			$employee= $_POST['search_string'];
			$CountTrans = mysql_query("
				SELECT TransactionID
				FROM transactions
				WHERE employee='".$employee."' ");
			 		
			while ($row = mysql_fetch_array($CountTrans)) 
			{
			$TransactionID = $row['TransactionID'];
			}
		?>
		<?php 
			if (mysql_num_rows( $CountTrans ) == 0) {
				echo "<br /><center><font color='#FF0000'><strong>This Employee has not signed any dealerships or hired anyone that has.</strong></font></center>"; 
			}
			else {
		?>
		<table width="700" cellpadding="5" cellspacing="0" border="0" class="table">
			<tr>
				<td>
				<div id="referral">
					<table cellpadding="7" cellspacing="0" border="0" align="center" width="850">
						<tr>
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
						$employee= $_POST['search_string'];

						$sql = mysql_query("
							SELECT *
							FROM transactions
							WHERE employee='".$employee."'");

						while ($row = mysql_fetch_array($sql)) 
						{
						$TransactionDate = $row['TransactionDate'];
						$TransactionID = $row['TransactionID'];
						$eID = $row['eID'];
						$employee = ($row['employee']);
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
						<tr><td colspan="10" align="center"><hr></td></tr>
						<tr>
							<td align="center"><?php echo $TransactionDate; ?></td>		
							<td align="center"><?php echo $TransactionID;?></td>	
							
							<td align="center">
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
							</td>
							<td align="center">
								<?php			
								if (empty($registered)) {
					    				echo "----";
								} else {
					    				echo "$" . $registered;
								}

								?>
							</td>
							<td align="center">
								<?php			
								if (empty($Renewed)) {
					    				echo "----";
								} else {
					    				echo "$" . $Renewed;
								}

								?>
							</td>
							<td align="center">
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
							<td align="center">
								<?php			
								if (empty($Commission)) {
					    				echo "";
								} else {
					    				echo "$" . $Commission;
								}

								?>
							</td>
							<td align="center">
								<?php			
								if (empty($EmplReferral)) {
					    				echo "----";
								} else {
					    				
									//Get Employee Referal's Email
									$GetRefEmail = mysql_query("
										SELECT EmplEmail 	
										FROM employees 
										WHERE employee ='".$EmplReferral."' ");
									while ($row = mysql_fetch_array($GetRefEmail)) {
										$EmplEmail = $row['EmplEmail'];
										}
								echo "<p><a href='mailto:$EmplEmail'>" . $EmplReferral . "</a></p>";
									}

								?>
							</td>
							<td align="center">
								<?php			
								if (empty($ReferralAmount)) {
									echo "----" ;
								} else {
									echo "$" . $ReferralAmount;
								}
								?>
							</td>
						</tr>
						<?php } 
						?>
						</table>
					<?php }?>
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
