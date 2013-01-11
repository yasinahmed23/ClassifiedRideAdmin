<?php
	//Enable Session Variables	
	session_start();
	$user = $_SESSION['user']; 	

	//Connect to Database	
	require_once '../includes/db_config2.php';

$GetEmployees = mysql_query("
	SELECT employeeID
	FROM employees
	");
$num_rows = mysql_num_rows($GetEmployees);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/scroll.jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$( '#infinite_scroll' ).scrollLoad({
		url: "loadMoreEmployees.php?lastEmployee="+ $(".postedEmployee:last").attr('employeeID') ,
		getData : function() {
			 //post some data along with ajax request
		},
		start : function() {
			$('<div class="loading"><img src="ajax-loader.gif"/></div>').appendTo(this);
		},

		ScrollAfterHeight : 85,	

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
<link href="../styles/InfiniteScrollStyle.css" rel="stylesheet" type="text/css" />
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
	<?php include '../includes/header.php'; ?>
</div>	
<div id="container">
	<div id="main">
		<?php include '../includes/main.php'?>
	</div>	
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<!--If Logged in as Admin, Display # of Employees -->		
		<?php if (isset($_SESSION[admin])) {
			echo "<p align='center'><strong>Total # of Employees Found:" .  $num_rows . "</strong></p>";
			}?>
		
		<ul id="infinite_scroll">
			<div id="postedEmployees">
				<?php 
				$SQLquery = mysql_query("
					SELECT *
					FROM employees 
					ORDER BY employeeID ASC
					");
				
				$lastId ;
				while($data = mysql_fetch_object($SQLquery)){
					$TimeRegistered = $data->TimeRegistered;
					$employeeID = $data->employeeID ;
					$EmplFirstName = $data->EmplFirstName;
					$EmplLastName = $data->EmplLastName ;
					$EmplEmail = $data->EmplEmail ;
					$EmplCity = $data->EmplCity ;
					$EmplState = $data->EmplState ;
					$pic = $data->pic ;
				?>
				<!--Disply data from database into a table -->
		
				<?php echo "
				<div class='postedEmployee' employeeID=\"$data->employeeID \">
					<li><b>Employee ID : </b>"."$employeeID </li> 
					<li><b>Employee Firstname : </b>"."$EmplFirstName </li>
					<li><b>Employee Lastname : </b>"."$EmplLastName</li> 
					<li><b>Employee Email : </b>"."<a href='mailto:$EmplEmail'>$EmplEmail</a></li>	
					<li><b>Employee City : </b>"."$EmplCity </li>		
					<li><b>Employee State : </b>"."$EmplState </li>			
					<li>";printf("<img src='/uploads/$pic' width='100'>");echo "</li>
					<hr /></div>";
				 } 
				?>
		
				<div id="loadMoreEmployees" style="display:none;" > 
					<script type="text/javascript">
					$(document).ready(function() { 
						$(window).scroll(function() {
						   	if($(window).scrollTop() == $(document).height() - $(window).height()) {	
								$('div#loadMoreEmployees').show();
								$.ajax({
									url: "loadMoreEmployees.php?lastEmployee="+ $(".postedEmployee:last").attr('employeeID') ,
									success: function(html) {
									if(html){		
										$("#postedEmployees").append(html);
										$('div#loadMoreEmployees').hide();
										}else{		
										$('div#loadMoreEmployees').replaceWith("<center><h1 style='color:red'>You are viewing all of the employees.</h1></center>");
										}
									}
								});
							}
						});
					});
					</script>
				</div>
			</div>
		</ul>
	
		<?php if (isset($_SESSION[admin])) {
			echo"<div align='center'><form action='/ExportCSV_Employees.php'><input class='Button' type='submit' value='Export All $num_rows Employees' /></form></div>";	
			}
		?>
	</div>
</div>	

