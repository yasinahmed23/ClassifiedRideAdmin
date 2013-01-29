<?php
	//Enable Session Variables	
	session_start();
	
	if (!isset($_SESSION[user])) {
	header("location: index.php");
	}
	
	//Connect to Database	
	require_once 'includes/db_config.php';

	$user = $_SESSION['user'];
	$admin = $_SESSION['admin'];
	$ARadmin = $_SESSION['ARadmin'];

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
}

function validateForm2()
{
	var Notes=document.forms["AddNote"]["Notes"].value;

	if (Notes==null || Notes=="")
	{alert("You must type the note before you can replace the current note.");
	return false;}
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
		<center><font size="+2"><strong><?php echo "Dealer Search Results"?></strong></font></center>
			<?php 
			$count=mysql_num_rows($GetDealerInfo);
			if ($count==1) {
			?>
			<table cellpadding="2" cellspacing="0" border="0" align="center" class="table" width="100%">
				<tr valign="top">
					<td>
					
						<table cellpadding="2" cellspacing="0" border="0" align="center" width="900">
							<tr>
								<td align="center">&nbsp;</td>		
								<td align="center" width="100"><strong>Dealership</strong></td>				
								<td align="center" width="90"><strong>Contact</strong></td>	
								<td align="center" width="150"><strong>Billing Address</strong></td>
								<td align="center" width="110"><strong>Phone</strong></td>		
								<td align="center" width="100"><strong>Email</td>
								<td align="center" width="90"><strong>Rep</td>
								<td align="center" width="20"><strong>Plan</td>
								<td align="center" width="70"><strong>Mthly Pmt</td>
								<td align="center" width="20"><strong>Date Due </td>
								<td align="center" width="20"><strong>Last Payment</td>
								<td align="center" width="150"><strong>Notes</td>
							</tr>
							<!--Disply data from database into a table -->
							<tr valign='top'>
								<td colspan='12' align='center'><hr /></td>
							</tr>
							<tr>
								<td align="center"><?php echo $CountDealers;?></td>		
								<td align="center"><?php echo $DealerName;?></td>
								<td align="center"><?php echo $Contact;?></td>		
								<td align="center"><?php echo $DealerAddress;?></td>
								<td align="center"><?php echo $AccountPayableCell;?></td>
								<td align="center"><?php echo "<p><a href='mailto:$AccountPayableEmail'>" . $AccountPayableEmail . "</a></p>";?></td>
								<td align="center">
									<?php 
										//Get Dealer Rep's Email
										$GetRepsEmail = mysql_query("
											SELECT EmplEmail 	
											FROM employees 
											WHERE employee ='".$RepName."' ");

										while ($row = mysql_fetch_array($GetRepsEmail)) {
											$EmplEmail = $row['EmplEmail'];
											}		
										echo "<p><a href='mailto:$EmplEmail'>" . $RepName . "</a></p>";
				
									?>
								</td>
								<td align="center"><?php echo "$" . $Program;?></td>
								<td align="center"><?php echo "$" . $MthlyPmt;?></td>
								<td align="center"><?php 
											$start  = strpos($StartDate, '/');
											$end    = strpos($StartDate, '/', $start + 1);
											$length = $end - $start;
											$DateDue = substr($StartDate, $start + 1, $length - 1);
											echo $DateDue;
										?>
								</td>
								<td align="center"><font size="-2">No Payments made</font></td>
								<td align="center"><?php echo $Notes;?></td>
							</tr>					
						</table>

				</td>
			</tr>
		</table>
		<br />
		<table width="100" cellpadding="0" cellspacing="0" border="0" align="center">
			<tr valign="top">
				<?php if ($StartDate == "" || $StartDate == null) {
					?>
					<td>
					<form id='SetStartDate' name='SetStartDate' method='post' action='/AccountsReceivable/SetStartDate.php' onsubmit='return validateForm()'>
						<input type='text' name='date' id='date' class='textfield' onclick='fPopCalendar("date")'/>
						<input type='hidden' name='DealerName' id='DealerName' class='textfield' value='<?php echo $DealerName; ?>' />
						<input type='submit' name='submit' id='submit' class='Button' value='Set Start Date' />
					</form>
					</td>
					<td>&nbsp;</td>
				<?php
					
				}
						
				else {
					echo "";				
				}
				?>
				<td>

				<form id="AddNote" name="AddNote" method="post" action="/AccountsReceivable/AddNote.php"  onsubmit="return validateForm2()">
					<input type="text" name="Notes" id="Notes" class="textfield" size="30" />
					<input type="hidden" name="DealerName" id="DealerName" class="textfield" value="<?php echo $DealerName; ?>" />
					<input type="submit" name="submit" id="submit" class="Button" value="UPDATE NOTE" />
				</form>
				</td>
			</tr>
		</table>
		<br />

		<table>
			<tr valign="top">
	
				<td>
					<table width="350" cellpadding="5" cellspacing="0" border="0" class="table">	
						<tr>
							<td  align="center">
							<strong>Email Leads</strong>
							</td>
							<td  align="center">
							ON
							</td>
							<td align="center">
				&nbsp;														
							</td>
						</tr>
	
						<tr>
							<td  align="center">
							<strong>SMS Blast</strong> ($990)
							</td>
							<td  align="center">
							<?php
							if ($SMS=="SMSDeclined") {
								echo "Off";
							}
							else {
							echo "On";
							}
							?>
							</td>
							<td align="center">
							<form id="SMS" name="SMS" method="post" action="/AccountsReceivable/UpdateSMS.php">
							<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
							<?php
							if ($SMS=="SMSDeclined") {
								echo "<input type='submit' class='Button' name='SMS' id='SMS' value='Turn On'>";
							}
							else {
							echo "<input type='submit' class='Button' name='SMS' id='SMS' value='Turn Off'>";
							}
							?>
							</form>
							</td>
						</tr>
	
						<tr>
							<td align="center">
							<strong>CaBID</strong> ($399)
							</td>
							<td  align="center">
							<?php
							if ($CaBID=="CaBIDDeclined") {
								echo "Off";
							}
							else if ($CaBID=="CaBIDON") {
							echo "On";
							}
							?>
							</td>
							<td align="center">
							<form id='CaBID' name='CaBID' method='post' action='/AccountsReceivable/UpdateCabid.php'>
							<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
							<?php
							if ($CaBID=="CaBIDDeclined") {
								echo "<input type='submit' class='Button' name='CaBID' id='CaBID' value='Turn On'>";
							}
							else {
							echo "<input type='submit' class='Button' name='CaBID' id='CaBID' value='Turn Off'>";
							}
							?>
							</form>
							</td>
						</tr>
	
						<tr>
							<td  align="center">
							<strong>YouTube</strong>  ($199)
							</td>
							<td  align="center">
							<?php
							if ($YouTube=="YouTubeON") {			
								echo "On";
							}
							else {
								echo "Off";
							}
							?>
							</td>
							<td align="center">
							<form id='YouTube' name='YouTube' method='post' action='/AccountsReceivable/UpdateYouTube.php'>
							<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
							<?php
							if ($YouTube=="YouTubeDeclined") {
								echo "<input type='submit' class='Button' name='YouTube' id='YouTube' value='Turn On'>";
							}
							else {
							echo "<input type='submit' class='Button' name='YouTube' id='YouTube' value='Turn Off'>";
							}
							?>
							</form>
							</td>
						</tr>
	
						<tr>
							<td  align="center">
							<strong>FB 25,000 "LIKES"</strong> ($1490)
							</td>
							<td align="center">
							<?php
							if ($facebook=="facebookON") {			
								echo "On";
							}
							else if ($facebook=="FacebookDeclined") {
								echo "Off";
							}
							?>
							</td>
							<td align="center">
							<form id='facebook' name='facebook' method='post' action='/AccountsReceivable/UpdateFacebook.php'>
							<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
							<?php
							if ($facebook=="FacebookDeclined") {
								echo "<input type='submit' class='Button' name='facebook' id='facebook' value='Turn On'>";
							}
							else {
							echo "<input type='submit' class='Button' name='facebook' id='facebook' value='Turn Off'>";
							}
							?>
							</form>
							</td>
						</tr>
	
						<tr>
							<td  align="center">
							<strong>Dealer Directory</strong> ($99)
							</td>
							<td align="center"">
							<?php
							if ($directory=="directoryON") {			
								echo "On";
							}
							else if ($directory=="DirectoryDeclined") {
								echo "Off";
							}
							?>
							</td>
							<td align="center">
							<form id='directory' name='directory' method='post' action='/AccountsReceivable/Updatedirectory.php'>
							<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
							<?php
							if ($directory=="DirectoryDeclined") {
								echo "<input type='submit' class='Button' name='directory' id='directory' value='Turn On'>";
							}
							else {
							echo "<input type='submit' class='Button' name='directory' id='directory' value='Turn Off'>";
							}
							?>
							</form>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table width="430" cellpadding="0" cellspacing="0" border="0">
						<tr valign="top">		
							
							<td>
								<table align="center">
									<tr valign="top">
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<strong>Email Leads</strong>	
													<!--RETURN SCRIPT FOR EMAIL LEADS HERE -->
													<p><font size="-2">(This will come from Tommy)<font><p>									</td>
												</tr>
											</table>
										</td>
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<strong>SMS Blast</strong>
													<!--RETURN SCRIPT FOR SMS BLAST HERE -->
													<p><font size="-2">(This will come from Josh & Armando)<font><p>									
													</td>
												</tr>
											</table>
										</td>
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<strong>Dealer Directory</strong>
													<!--RETURN SCRIPT FOR DEALER DIRECTORY HERE -->
													<p><font size="-2">(This will come from Tommy)<font><p>
													
													</td>
												</tr>
											</table>
										</td>
								
									</tr>
									<tr valign="top">
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<img src="/images/youtube.jpg" width="75" alt="YOU TUBE: Inventory Videos" border="0">
													<!--RETURN SCRIPT FOR YOUTUBE HERE -->
													<p><font size="-2">(This will come from Josh)<font><p>
													</td>
												</tr>
											</table>
										</td>
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<img src="/images/Facebook2.jpg" width="75" alt="FACEBOOK: 25,000 'LIKES' Fan Page">
													<!--RETURN SCRIPT FOR FB HERE -->
													<p><font size="-2">(This will come from Josh)<font><p>
													</td>
												</tr>
											</table>
										</td>
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<img src="/images/Cabid.jpg" width="86" alt="Cabid: Bid-Offer Negotiation Leads">
													<!--RETURN SCRIPT FOR CABID HERE -->
													<p><font size="-2">(This will come from Josh)<font><p>
													</td>
												</tr>
											</table>
										</td>
								
									</tr>
							
								</table>
							</td>

						</tr>
					</table>
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
