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
<title>Add Employee</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header.php'; ?>
</div>
<div id="container">
	<form id="NewBlog" name="NewBlog" method="post" action="includes/AddEmployee_process.php" onSubmit="alert('Employee Has Been Added');">
<table width="240" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr>
		<td width="70"><strong>First Name</strong></td>		
		<td width="150" align="center"><input name="first_name" type="text" class="textfield" id="first_name" size="15" /></td>
	</tr>
	<tr>
		<td width="90"><strong>Last Name</strong></td>		
		<td width="150" align="center"><input name="last_name" type="text" class="textfield" id="last_name" size="15" /></td>
	</tr>
	<tr>
		<td width="90"><strong>Email</strong></td>		
		<td width="150" align="center"><input name="EmplEmail" type="text" class="textfield" id="EmplEmail" size="15" /></td>
	</tr>
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
		<input type="submit" name="Submit" value="Add Employee" /></form>
		<form class="cancel" name="cancel" method="post" action="transactions.php" onSubmit="alert('Transaction Cancelled');"><input type="submit" name="Submit" value="Cancel" /></form>
		</td>
	</tr>
</table>
	
</form>
</div>
</body>
</html>


