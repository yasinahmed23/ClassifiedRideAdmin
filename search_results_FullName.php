<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

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
		<?php include 'includes/main.php'?>
	</div>
	<div id="profile">
		<div align="center">
			<font size="+2"><strong>
			<?php echo "Employee Info"?></strong></font>
		</div>
			<table cellpadding="5" cellspacing="0" border="1" align="center">
				<tr>
					<td align="center"><strong>ID</strong></td>				
					<td align="center"><strong>First Name</strong></td>	
					<td align="center"><strong>MI</strong></td>		
					<td align="center"><strong>Last Name</strong></td>
					<td align="center"><strong>Referred By</td>
					<td align="center"><strong>Email</td>
					<td align="center"><strong>Cell Phone</td>
				</tr>

			<?php
			//Get data from database and assign to a variable

			$EmplLast_name = $_POST['search_string'];
			$sql = mysql_query("
				SELECT *
				FROM employees 
				WHERE EmplLastName='".$EmplLast_name."'
			");

			while ($row = mysql_fetch_array($sql)) 
			{
			$employeeID = $row['employeeID'];
			$EmplFirstName = $row['EmplFirstName'];
			$EmplMiddleInitial = $row['EmplMiddleInitial'];
			$ReferredBy = $row['ReferredBy'];
			$EmplEmail = $row['EmplEmail'];
			$EmplPhone = ($row['EmplCellPhone1']) . "-" . ($row['EmplCellPhone2']) . "-" . ($row['EmplCellPhone3']);
			?>
	
			<!--Disply data from database into a table -->
				<tr>
					<td align="center"><?php echo $employeeID?></td>
					<td align="center"><?php echo $EmplFirstName;?></td>		<td align="center"><?php echo $EmplMiddleInitial;?></td>		
					<td align="center"><?php echo $EmplLast_name;?></td>
					<td align="center"><?php echo $ReferredBy;?></td>
					<td align="center"><a href="mailto:<?php echo $EmplEmail; ?>"><?php echo $EmplEmail;?></a>
				
					</td>
					<td align="center"><?php echo $EmplPhone;?></td>
				</tr>
			<?php } 
			?>
			</table>
			<br /><br />
			<table cellpadding="5" cellspacing="0" border="1" align="center">
				<tr>
					<td align="center"><strong>Trans ID</strong></td>				
					<td align="center"><strong>Date</strong></td>				
					<td align="center"><strong>First Name</strong></td>	
					<td align="center"><strong>Last Name</strong></td>
					<td align="center"><strong>#Referrals</td>
					<td align="center"><strong>#Dealers</td>
					<td align="center"><strong>TOTAL</strong></td>
					<td align="center"><strong>Added By</td>
				</tr>

			<?php
			//Get data from database and assign to a variable

			$sql2 = mysql_query("
				SELECT *
				FROM transactions 
				WHERE EmplLastName='".$EmplLast_name."'
			");

			while ($row = mysql_fetch_array($sql2)) 
			{
			$TransactionDate = $row['TransactionDate'];
			$TransactionID = $row['TransactionID'];
			$EmplFirstName = $row['EmplFirstName'];
			$EmplReferral = $row['EmplReferral'];
			$EmplDealer = $row['EmplDealer'];
			$member = $row['member'];
			$total= (($EmplReferral)+($EmplDealer*50));
			?>
	
			<!--Disply data from database into a table -->
				<tr>
					<td align="center"><?php echo $TransactionID;?></td>							
					<td align="center"><?php echo $TransactionDate?></td>
					<td align="center"><?php echo $EmplFirstName;?></td>		
					<td align="center"><?php echo $EmplLast_name;?></td>
					<td align="center"><?php echo $EmplReferral;?></td>
					<td align="center"><?php echo $EmplDealer;?></td>
					<td align="center"><?php echo '$' . $total;
					?></td>					
					<td align="center"><?php echo $member;?>
				
					</td>
				</tr>
			<?php } 
			?>
			</table>
	</div>
</div>
</body>
</html>
