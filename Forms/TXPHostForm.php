<?php
	//Enable Session Variables	
	session_start();
	
	//Connect to Database	
	include '../../includes/db_config2.php';
	include '../../Functions/DealerFunctions.php';
	include '../../Functions/dbConnector.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dealers | ClassifiedRide</title>
<link href="../../styles/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" title="Style CSS" href="styles/calendar.css" type="text/css" media="all" />
</head>
<body>
<div id="top">
	<?php include '../../includes/headerDealer.php'?>
</div>
<div id="container">
	<div id="Dealermain">
		<?php include '../../includes/Dealer_main.php'?>
	</div>
	<div id="spacer2">&nbsp;</div>
	<div id="profile">
		<div align="center">
		<script type="text/javascript">function cs() {document.cookie = "fam=barn"}</script>
		<form action="02txpmid.php" method="post" name="z_form"  onsubmit="cs()">

			<?php 
				$name = "Lisa Simpson"; 
				$address1= "123 Main Street"; 
				$address2="B";
				$city = "Nashville";
				$state = "TN";
				$zip = "37205";
				$phoneNumber = "6155540580";
				$email = "stephmcglathery@gmail.com";
				$startDate = "04152013";
				$Amount = "50.00";
				?>
			<input type="hidden" name="FullName" size="20" value = "<?php echo $name; ?>">
			<input type="hidden" name="Address1" size="50" value = "<?php echo $address1; ?>">
			<input type="hidden" name="Address2" size="50" value = "<?php echo $address2; ?>">
			<input type="hidden" name="City" size="40" value = "<?php echo $city; ?>">
			<input type="hidden" name="State" size="40" value = "<?php echo $state; ?>">
			<input type="hidden" name="Zip" size="9" value = "<?php echo $zip; ?>">
			<input type="hidden" name="ShipToZip" size="20" value = "<?php echo $zip; ?>" >
			<input type="hidden" name="PhoneNumber" size="15" value = "<?php echo $phoneNumber; ?>">
			<input type="hidden" name="Email" size="75" value = "<?php echo $email; ?>">
			<input type="hidden" name="StartDate" size="10" value = "<?php echo $startDate; ?>">
			<input type="hidden" name="Amount" size="10" value = "<?php echo $Amount; ?>">	
	

			<!-- These are the Merchant Services Variables -->
			<input type="hidden" name="TaxIndicator" size="20" value = "0">
			<input type='hidden' name='Descriptor' id='Descriptor' value='ACH Test' />
			<!--0 = Telephone (TEL) 1 = Internet(WEB) 2 = Business to Consumer (PPD) 3 = Business to Business (CCD)-->
			<input type='hidden' name='SECCode' id='SECCode' value='1' />
			<!--0 = MOTO 1 = Retail 2 = eCommerce-->
			<input type="hidden" name="IndustryCode" id="IndustryCode" value="2" />

			<input type="hidden" name="CustRefID" size="20" value = "PCNoAVS">
			<input type="hidden" name="PONumber" size="20" value = "123">

	
			<!--00 = Daily 10 = Weekly 20 = Bi-Monthly 30 = Every 4 weeks 40 = Every 8 Weeks 51 = Specified Day of the Month 70 = Quarterly 80 = Yearly 90 = Single-->
			<input type="hidden" name="PaymentFrequency" size="10" value = "90">
			<input type="hidden" name="NumberOfPayments" size="10" value = "">
			<input type="hidden" name="RecurringType" id="RecurringType" value="M" />

			<!--(This input throws an error)<input type="hidden" name="TaxAmount" size="20"  value = "0">-->

			<table cellpadding="10" cellspacing="0" border="0" class="table" align="center">
				<tr valign="top">
					<td>
					<strong>Name:</strong>
					</td>
					<td><?php echo $name; ?></td>
				</tr>
				<tr valign="top">
					<td>
					<strong>Address:</strong> 
					</td>
					<td><?php echo $address1 . "&nbsp;" . $address2; ?></td>
				</tr>
				<tr valign="top">
					<td>&nbsp;</td>
					<td><?php echo $city . ", " . $state . "&nbsp;" . $zip; ?></td>
				</tr>
				<tr valign="top">
					<td>
					<strong>Amount:</strong>  
					</td>
					<td><?php echo $Amount; ?></td>
				</tr>
			</table>

			<input type="submit" name="Go" value="Make Payment"  style="background-color: #cc0000; font-weight: bold; font-size: 12px; color: white;" />
		</form>
		</div>
	</div>
</div>
<?php include '../../includes/footer.php'; ?>
</body>
</html>

