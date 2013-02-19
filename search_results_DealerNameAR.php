<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'Functions/ARFunctions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Results | ClassifiedRide</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" title="Style CSS" href="styles/calendar.css" type="text/css" media="all" />
<script type="text/javascript">
  var formatSplitter = "/";
  var monthFormat = "mmm";
  var yearFormat = "yyyy";
</script>
<script type="text/javascript" src="js/calendar.js"></script>
<!--VALIDATE NO EMPTY FIELDS & VALIDATE EMAILL ADDRESES UPON FORM SUBMISSION-->
<script type="text/javascript">
function validateForm()
{
	var date=document.forms["SetStartDate"]["date"].value;

	if (date==null || date=="")
	{alert("You must select a date before you can update it.");
	return false;}

	if(!confirm('Are you sure that you want to set the start date?')){return false;}
}

function validateForm2()
{
	var Notes=document.forms["AddNote"]["Notes"].value;

	if (Notes==null || Notes=="")
	{alert("You must type the note before you can replace the current note.");
	return false;}

	if(!confirm('Are you sure that you want REPLACE the current note?')){return false;}
}
</script>
</head>
<body>
<div id="top">
	<?php include 'includes/header_AR.php'; ?>
</div>

<div id="container">
	<div id="main">
		<?php include 'includes/AR_main.php'?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php include 'AccountsReceivable/ARdealerFeed.php'; ?>
	</div>
</div>
</body>
</html>
