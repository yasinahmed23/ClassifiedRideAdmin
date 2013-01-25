<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[admin])) {
	header("location: login_error_admin.php");
	}
	
	//Connect to Database	
	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	
	require_once 'includes/db_config.php';
	require_once 'Functions/AdminFunctions.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include 'includes/header_Admin.php'; ?>
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/main.php';
		?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<center><font size="+1"><strong>SUMMARY</strong></font></center>
		<table width="890" cellpadding="5" cellspacing="0" align="center" border="0">
			<tr valign="top">
				<td>
					<table width="325" cellpadding="5" cellspacing="0" align="center"  class="table2">
						<tr valign="top">
							<td align="center">
							<strong><u>Employees</u></strong>
								<table cellpadding="0" cellspacing="0" align="center" border="0">
									<tr>
										<td colspan="2">&nbsp;</td>
									</tr>									
									<tr>
										<td>Total Employees:  </td>
										<td width="90"><?php echo $NumEmployees; ?></td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									<tr>
										<td>Total Hired in past 7 days:  </td>
										<td width="90"><?php echo $NumEmployees7Days; ?></td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									<tr>
										<td>Total Commission:  </td>
										<td width="90">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									<tr>
										<td>Commission from Past 7 Days:  </td>
										<td width="90">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
								</table>
							</td>
							
						</tr>
					</table>
				</td>

				<td>
					<table width="325" cellpadding="1" cellspacing="0" align="center" border="0" class="table2">
						<tr valign="top">
							<td align="center">
							<strong><u>Dealers</u></strong>
								<table cellpadding="0" cellspacing="0" align="center" border="0">
									<tr>
										<td colspan="2">&nbsp;</td>
									</tr>									
									<tr>
										<td>Total Dealers:  </td>
										<td><?php echo $NumDealers; ?></td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									<tr>
										<td>Total Signed in past 7 days:  </td>
										<td width="90"><?php echo $NumDealers7Days; ?></td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									<tr>
										<td>Total Revenue:  </td>
										<td width="90">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									<tr>
										<td>Revenue From Past 7 Days:  </td>
										<td width="90">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
								</table>							
							</td>
							
						</tr>
					</table>
				</td>

				<td>
					<table width="325" cellpadding="5" cellspacing="0" align="center" border="0"  class="table2">
						<tr valign="top">
							<td align="center">
							<strong><u>Transactions</u></strong>
								<table cellpadding="0" cellspacing="0" align="center" border="0">
									<tr>
										<td colspan="2">&nbsp;</td>
									</tr>									
									<tr>
										<td>Total Transactions:  </td>
										<td><?php echo $NumTransactions; ?></td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									<tr>
										<td># Of Registrations:  </td>
										<td width="90">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									</tr>
									<tr>
										<td># Of Renewals:  </td>
										<td width="90">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>
									</tr>
									<tr>
										<td>Transactions From Past 7 Days:</td>
										<td width="90">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="2"><hr /></td>
									</tr>


 
								</table>
							</td>
							
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<br /><br />
		<table width="1000" cellpadding="5" cellspacing="0" align="center" border="0" class="table">
			<tr valign="top">
				<td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td>
			</tr>
		</table>
	</div>
</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>	
