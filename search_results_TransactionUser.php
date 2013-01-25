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
<div id="logo"><h1>Search Results</h1></div>
<div id="login">
<?php
echo $user . " you are logged in.";
?>
</div>	
<div id="container">
	<div id="main">
		<?php include 'includes/main.php'?>
	</div>
	<div id="profile">
		<table cellpadding="5" cellspacing="0" border="1">
				<tr>
					<td align="center"><strong>Pay Ending</strong></td>				
					<td align="center"><strong>Trans ID</strong></td>				
					<td align="center"><strong>First Name</strong></td>	
					<td align="center"><strong>Last Name</strong></td>
					<td align="center"><strong>#Referrals</td>
					<td align="center"><strong>#Dealers</td>
					<td align="center"><strong>Added By</td>
				</tr>

			<?php
			//Get data from database and assign to a variable
			$member = $_POST['search_string'];
			$sql2 = mysql_query("
				SELECT *
				FROM transactions 
				WHERE member='".$member."'
			");
			while ($row = mysql_fetch_array($sql2)) 
			{
			$TransactionDate = $row['TransactionDate'];
			$TransactionID = $row['TransactionID'];
			$EmplFirstName = $row['EmplFirstName'];
			$EmplLastName = $row['EmplLastName'];
			$EmplReferral = $row['EmplReferral'];
			$EmplDealer = $row['EmplDealer'];
			?>
	
			<!--Disply data from database into a table -->
				<tr>
					<td align="center"><?php echo $TransactionDate;?></td>
					<td align="center"><?php echo $TransactionID;?></td>		
					<td align="center"><?php echo $EmplFirstName;?></td>		
					<td align="center"><?php echo $EmplLastName;?></td>
					<td align="center"><?php echo $EmplReferral;?></td>
					<td align="center"><?php echo $EmplDealer;?></td>
					<td align="center"><?php echo $member;?></td>
				</tr>
			<?php } 
			?>
			</table>
	</div>

</div>
</body>
</html>
