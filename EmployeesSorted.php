<?php
	//Enable Session Variables	
	session_start();
	$user = $_SESSION['user']; 
	$admin = $_SESSION['admin'];	

	//Connect to Database	
	require_once 'includes/db_config.php';

	// create variables out of user input
	$numdays=$_POST['numdays'];	

	$GetEmployees = mysql_query("
	SELECT employeeID
	FROM employees
	where TimeRegistered between date_sub(now(),INTERVAL '$numdays' DAY) and now()");
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
		echo "<p align='center'><font size='+1'><strong>You are viewing the Employees Added from the past  " . $numdays . " Days</strong></font></p>";	
		?>
		<table width="770" cellpadding="5" cellspacing="0" border="0" class="table" align="center">
			<tr>
				<td>
				<div id="empllist">
				<?php 
					if ($num_rows!=0) {
						include 'includes/Employee_feed_Table_Sorted.php';
					}
					else {
						echo "<p align='center'>No employees were added from the past  " . $numdays . " days</p>";	
					}
				?>
				</div>
				</td>
			</tr>
		</table>
		<div id="export">
			<?php if (isset($_SESSION[admin])) {
			echo "
			<table width='300' border='0' cellpadding='0' cellspacing='0' align='center'>
				<tr>
					<td align='center'><form name='SortEmployees' method='post' action='/includes/ExportCSV_EmployeesVIEW.php'>
					<input type='hidden' id='days' name='days' value='$numdays' />
					<input class='Button' type='submit' value='Export View of $num_rows Employees to .csv' /></form></td>
				</tr>
			</table>";
			}
		?>
			
	</div>
	</div>
</div>	

