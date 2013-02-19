<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];

	require_once 'Functions/Functions.php';
	
	$GetEmployeeInfo = mysql_query("
		SELECT *
		FROM employees 
		WHERE EmplLastName='".$EmplLast_name."'
	");

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
			<?php 
			$count=mysql_num_rows($GetEmployeeInfo);
			if ($count>=1) {
			?>
			<table cellpadding="5" cellspacing="0" border="0" align="center" class="table" width="750">
				<tr valign="top">
					<td>
					<div id="dealerlist">
					<table cellpadding="0" cellspacing="0" border="0" align="center" width=100%>
						<tr valign="top">
							<td align="center"><strong>Name</strong></td>
							<td align="center"><strong>Location</td>
							<td align="center"><strong>Profile Pic</td>
						</tr>
						<?php
						//Get data from database and assign to a variable

						$EmplLast_name = $_POST['search_string'];

						while ($row = mysql_fetch_array($GetEmployeeInfo)) 
						{
						$employeeID = $row['employeeID'];
						$EmplFirstName = $row['EmplFirstName'];
						$EmplMiddleInitial = $row['EmplMiddleInitial'];
						$ReferredBy = $row['ReferredBy'];
						$EmplEmail = $row['EmplEmail'];
						$EmplCity = $row['EmplCity'];
						$EmplState = $row['EmplState'];
						$EmplPhone = ($row['EmplCellPhone1']) . "-" . ($row['EmplCellPhone2']) . "-" . ($row['EmplCellPhone3']);
						$pic= $row ['pic'];
						?>
						<!--Disply data from database into a table -->
						<tr valign='top'>
								<td colspan='3' align='center'><hr /></td>
							</tr>
						<tr valign="top">
							<td align="center"><p><?php echo "<a href='mailto:'" . $EmplEmail . ">" . $EmplFirstName . " " . $EmplLast_name . "</a>";?></p></td>
							<td align="center"><p><?php echo $EmplCity . ", " . $EmplState;?></p></td>
							</td>
							<td align="center"><p><?php printf("<img src='/uploads/$pic' width='100'>"); ?></p></td>
						</tr>
						<?php } 
						?>
					</table>
					</div>
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
