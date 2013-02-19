<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once '../includes/db_config.php';
	
	$DealerName= $_POST['search_string'];

	$id = $_GET['id'];

	$GetDealerInfo = mysql_query("
		SELECT *
		FROM dealers
		WHERE DealerID='".$id."' ||DealerName='".$DealerName."'");

		while ($row = mysql_fetch_array($GetDealerInfo)) 
			{
				$DealerID = $row['DealerID'];
				$AccountPayFirstName = $row['AccountPayFirstName'];
				$AccountPayLastName = $row['AccountPayLastName'];
				$DealerName = $row['DealerName'];
				$DealerStreet1 = ($row['DealerStreet1']);
				$DealerStreet2 = ($row['DealerStreet2']);
				$DealerCity = ($row['DealerCity']);
				$DealerState = $row['DealerState'];
				$DealerZip = $row['DealerZip'];
				$AccountPayableCell1 = $row['AccountPayableCell1'];
				$AccountPayableCell2 = $row['AccountPayableCell2'];
				$AccountPayableCell3 = $row['AccountPayableCell3'];
				$AccountPayableEmail = $row['AccountPayableEmail'];
				$RepName = $row['RepName'];
				$Program = $row['Program'];
				$MthlyPmt = $row['MthlyPmt'];
				$StartDate = $row['StartDate'];
				$Notes = $row['Notes'];
				$directory = $row['directory'];
				$facebook = $row['facebook'];
				$YouTube = $row['YouTube'];
				$CaBID = $row['CaBID'];
				$SMS = $row['SMS'];	

				if (isset($DealerStreet2)) {
					$DealerAddress = $DealerStreet1 . " " .  $DealerStreet2 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
				}
				else {
					$DealerAddress = $DealerStreet1 . "<br />" . $DealerCity . ", "  . $DealerState . " " . $DealerZip;
				}
				$AccountPayableCell= $AccountPayableCell1 . "-" . $AccountPayableCell2 . "-" .  $AccountPayableCell3;
				$Contact=$AccountPayFirstName . " " . $AccountPayLastName;
			}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search Results | ClassifiedRide</title>
<link href="../styles/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" title="Style CSS" href="../styles/calendar.css" type="text/css" media="all" />
<script type="text/javascript">
  var formatSplitter = "/";
  var monthFormat = "mmm";
  var yearFormat = "yyyy";
</script>
<script type="text/javascript" src="../js/calendar.js"></script>
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
	<?php require_once '../includes/header_AR.php'; ?>
</div>

<div id="container">
	<div id="main">
		<?php require_once '../includes/AR_main.php'; ?>
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="profile">
		<?php require_once 'ARdealerFeed.php'; ?>
	</div>
</div>
</body>
</html>
