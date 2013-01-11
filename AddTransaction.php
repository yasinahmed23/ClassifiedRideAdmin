<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	include 'includes/db_config.php';

	$user = $_SESSION['user'];
	//echo $user;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Transaction</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="autocomplete/search.js"></script>
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<strong>Add Transaction</strong>
		<form id="AddTransaction" name="AddTransaction" method="post" action="includes/AddTransaction_process.php" onSubmit="alert('Transaction Has Been Added');">

			<!--SELECT EMPLOYEE -->	
			<div class="dropdown">
				<font size="-2">Start Typing Employee Last Name to Find Employee</font> 	
				<input type="text" id="search_string" name="search_string" class="autocomplete">
  
			</div>
			<div class="dropdown">
				<ul class="result"></ul>
		
			</div>
			<!--SELECT EMPLOYEE -->	

			<table width="240" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr><td colspan="2">&nbsp;</td></tr>
				<tr>
					<td width="90"><strong># of Referrals</strong></td>		
					<td width="150" align="center"><input name="referrals" type="text" class="textfield" id="referrals" size="15" /></td>
				</tr>
				<tr>
					<td width="90"><strong># of Dealers</strong></td>		
					<td width="150" align="center"><input name="dealers" type="text" class="textfield" id="dealers" size="15" /></td>
				</tr>
				<tr><td colspan="2">&nbsp;</td></tr>
				<tr>
					<td colspan="2" align="center">
					<input type="submit" name="Submit" value="Add Transaction" /></form>
					<form class="cancel" name="cancel" method="post" action="transactions.php" onSubmit="alert('Transaction Cancelled');"><input type="submit" name="Submit" value="Cancel" /></form>
					</td>
				</tr>
			</table>
	
		</form>
	</div>
	
</div>
</body>
</html>


