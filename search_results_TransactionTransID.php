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
			<table cellpadding="5" cellspacing="0" border="1" align="center">
				<tr>
					<td align="center"><strong>Period Ending</strong></td>			
					<td align="center"><strong>Trans ID</strong></td>				
					<td align="center"><strong>Employee ID</strong></td>		
					<td align="center"><strong>Employee</strong></td>
					<td align="center"><strong>Commission</strong></td>
					<td align="center"><strong>Dealer ID</td>
					<td align="center"><strong>Dealer Name</td>
					<td align="center"><strong>Registered</td>
					<td align="center"><strong>Renewed</td>
					<td align="center"><strong>Member</td>
					<td align="center"><strong>Referrals</td>
				</tr>

				<?php
				//Get data from database and assign to a variable
				$TransactionID= $_POST['search_string'];

				$sql = mysql_query("
					SELECT *
					FROM transactions
					WHERE TransactionID='".$TransactionID."'
				");

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
				?>
	
				<!--Disply data from database into a table -->
				<tr>
					<td align="center"><?php echo $TransactionDate; ?></td>		
					<td align="center"><?php echo $TransactionID;?></td>	
					<td align="center"><?php echo $eID;?></td>		
					<td align="center"><?php echo $employee;?></td>
					<td align="center">
						<?php			
						if (empty($Commission)) {
			    				echo "";
						} else {
			    				echo "$" . $Commission;
						}

						?>
					</td>
					<td align="center"><?php echo $DealerID;?></td>
					<td align="center"><?php echo $DealerName;?></td>
					<td align="center">
						<?php			
						if (empty($registered)) {
			    				echo "";
						} else {
			    				echo "$" . $registered;
						}

						?>
					</td>
					<td align="center">
						<?php			
						if (empty($Renewed)) {
			    				echo "";
						} else {
			    				echo "$" . $Renewed;
						}

						?>
					</td>
					<td align="center"><?php echo $member;?></td>
					<td align="center">
						<?php			
						if (empty($EmplReferral)) {
			    				echo "";
						} else {
			    				echo $EmplReferral;
						}

						?>
					</td>
				</tr>
				<?php } 
				?>
			</table>
		</div>
	</div>
</div>
</body>
</html>
