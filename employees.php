<?php
	//Enable Session Variables	
	session_start();
	$user = $_SESSION['user']; 	

	//Connect to Database	
	require_once 'includes/db_config.php';

$GetEmployees = mysql_query("
	SELECT employeeID
	FROM employees
	");
$num_rows = mysql_num_rows($GetEmployees);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/scroll.jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$( '#infinite_scroll' ).scrollLoad({
		url: "InfiniteScroll/loadMoreEmployeesTable.php?lastEmployee="+ $(".postedEmployee:last").attr('employeeID') ,
		getData : function() {
			 //post some data along with ajax request
		},
		start : function() {
			$('<div class="loading"><img src="images/ajax-loader.gif"/></div>').appendTo(this);
		},

		ScrollAfterHeight : 95,	

		onload : function( data ) {
			$(this).append( data );
			$('.loading').remove();
		}, 		

		continueWhile : function( resp ) {
			if( $(this).children('li').length <= <?php echo $num_rows ?> ) {
				return false;
			}
			return true; 
		}
	});

});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ClassifiedRide Database Home</title>
<link href="/styles/InfiniteScrollStyle.css" rel="stylesheet" type="text/css" />
<link href="/styles/style.css" rel="stylesheet" type="text/css" />
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
		<?php include 'includes/main.php'?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php 
		if (isset($_SESSION[admin])) {
			echo " 
		<form id='SortEmployees' name='SortEmployees' method='post' action='EmployeesSorted.php'>
			<p align='center'><font size='+1'><strong>Total # of Employees : " .  $num_rows . "</strong>&nbsp;&dash;&nbsp;View Employees Added in the last  <input name='numdays' type='text' class='textfield' id='numdays' size='3' maxlength='3'/> Days. <input name='submit' type='submit' class='Button' id='submit' value='GO' />
			</font></p>
		</form>
		";	
		}
		else {
			echo "<p align='center'><strong>" . $num_rows . " Employees Found </strong></p>";
		}
		?>
		<table width="770" cellpadding="5" cellspacing="0" border="0" class="table" align="center">
			<tr>
				<td>
				<div id="empllist">
				<?php include 'includes/Employee_feed_Table.php';?>
				</div>
				</td>
			</tr>
		</table>
		<div id="export">	
			<?php
			if (isset($_SESSION[admin])) {
			?>
			<table width="300" border="0" cellpadding="0" cellspacing="0" align="center">
				<tr>
					<td><center><form action='/ExportCSV_Employees.php'><input class='Button' type='submit' value='Export All  <?php echo $num_rows; ?> Employees' /></form></center></td>
				</tr>
			</table>
			<?php } ?>
		</div>
	</div>
</div>	
<?php require_once 'includes/footer.php'; ?>
