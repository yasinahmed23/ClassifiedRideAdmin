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
<title>Search Results | Class<?php
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
		<?php include 'includes/main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<center><font size="+2"><strong><?php echo "Employee Search Results"?></strong></font></center>
			<table cellpadding="0" cellspacing="0" border="0" align="center" class="table"><tr valign="top"><td><table cellpadding="10" cellspacing="0" border="0" align="center">
				<tr>
					<td align="center"><strong>ID</strong></td>				
					<td align="center"><strong>First Name</strong></td>	
					<td align="center"><strong>MI</strong></td>		
					<td align="center"><strong>Last Name</strong></td>
					<td align="center"><strong>Referred By</td>
					<td align="center"><strong>Email</td>
					<td align="center"><strong>Cell Phone</td>
					<td align="center"><strong>Profile Pic</td>
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
				$pic= $row ['pic'];
				?>

				<!--Disply data from database into a table -->
				<tr valign='top'>
						<td colspan='8' align='center'><hr /></td>
					</tr>
				<tr>
					<td align="center"><?php echo $employeeID?></td>
					<td align="center"><?php echo $EmplFirstName;?></td>		<td align="center"><?php echo $EmplMiddleInitial;?></td>		
					<td align="center"><?php echo $EmplLast_name;?></td>
					<td align="center"><?php echo $ReferredBy;?></td>
					<td align="center"><a href="mailto:<?php echo $EmplEmail; ?>"><?php echo $EmplEmail;?></a>
		
					</td>
					<td align="center"><?php echo $EmplPhone;?></td>
					<td align="center"><?php printf("<img src='/uploads/$pic' width='100'>"); ?></td>
				</tr>
				<?php } 
				?>
			</table>
		</td>
	</tr>
</table>
<?php
//Get Employee ID from Lastname
$GetEmployeeID = mysql_query("
	SELECT employeeID
	FROM  employees
	WHERE EmplLastName='$EmplLast_name'
");

while ($row = mysql_fetch_array($GetEmployeeID)) 
{
	$employeeID = $row['employeeID'];
}
?>

</table></td></tr></table>
			
</div>
</div>
</body>
</html>
