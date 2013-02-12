<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION['admin'])) {
	header("location: login_error_admin.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];	
	
	require_once 'Functions/AdminFunctions.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function validateForm()
{
	var numdays=document.forms["SortTrans"]["numdays"].value;
	if (numdays==null || numdays=="")
	{alert("You must enter the # of Days that you want to search");
	return false;}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Transactions | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php 
	if (isset($_SESSION[admin])) {
		include 'includes/header_Admin.php'; 
	}
	else {
		include 'includes/header.php'; 
	}
	?>
</div>
<div id="container">
	<div id="main">
		<?php include 'includes/main.php';
		?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		
		<form id="SortTrans" name="SortTrans" method="post" action="TransactionsSorted.php" onsubmit="return validateForm()">
			<p align="center"><font size="+1"><strong>Total # of Transactions: <?php echo $NumTransactions; ?></strong>&nbsp;&dash;&nbsp;View Transactions from last  <input name="numdays" type="text" class="textfield" id="numdays" size="3" maxlength="3"/> Days. <input name="submit" type="submit" class="Button" id="submit" value="GO" />
			</font></p>
		</form>
		<table width="925" cellpadding="5" cellspacing="0" border="0" class="table" align="center">
			<tr>
				<td>
					<?php 
						include 'includes/transactionFeed.php';
					?>
				</td>
			</tr>
		</table>
		<div id="export">
			<?php if (isset($_SESSION[admin])) {
			echo "
			<table width='300' border='0' cellpadding='0' cellspacing='0' align='center'>
				<tr>
					<td align='center'><form action='/ExportCSV_Transactions.php'><input class='Button' type='submit' value='Export All $NumTransactions Transactions to .csv' /></form></td>
				</tr>
			</table>";
			}
		?>	
		</div>
	</div>
</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>	
