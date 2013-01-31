<?php
$name = $AccountPayFirstName . " " . $AccountPayLastName;
$address1 = $DealerStreet1;
$address2 = $DealerStreet2;
$city = $DealerCity;
$state = $DealerState;
$zip = $DealerZip;
$phoneNumber = $AccountPayableCell1 . $AccountPayableCell2 . $AccountPayableCell3;
$email = $AccountPayableEmail;

$amount = $MthlyPmt;

$var1 = $DateSigned;
$month = substr($var1, 0, 2);
$day = substr($var1, 3, 2);
$year = substr($var1, 6, 4);
$sep = "-";
$startDate = $year . $sep . $month . $sep . $day;
?>

<form action="https://hosted.cert.transactionexpress.com/Transaction/Transaction/Index" method="post" name="z_form">
	<input type="hidden" name="Gateway_ID" size="20" value ="7777777865"> 
	<input type="hidden" name="HostedKey" size="20" value = "9cd9aab0-6785-451f-b4a0-9f90436d2c05">
	<input type="hidden" name="RURL" size="20" value = "stephmcglathery.com/Dealers.php">
	<input type="hidden" name="CURL" size="20" value = "stephmcglathery.com/Dealers.php">
	<input type='hidden' name='EmailRequired' id='EmailRequired' value='Y' />
	<input type="hidden" name="RecurringType" id="RecurringType" value="A" />
	<input type="hidden" name="AVSRequired" size="20" value = "Y">
	<input type="hidden" name="CVV2Required" size="20" value = "Y">

	<!--0 = None 1 = Taxable 2 = Tax-Exempt-->
	<input type="hidden" name="TaxIndicator" size="20" value = "0">
	
	<input type="hidden" name="TaxAmount" size="20"  value = "0">
	<input type='hidden' name='Descriptor' id='Descriptor' value='ACH Test' />

	<!--0 = Telephone (TEL) 1 = Internet(WEB) 2 = Business to Consumer (PPD) 3 = Business to Business (CCD)-->
	<input type='hidden' name='SECCode' id='SECCode' value='1' />

	<!--0 = MOTO 1 = Retail 2 = eCommerce-->
	<input type="hidden" name="IndustryCode" id="IndustryCode" value="" />

	<input type="hidden" name="CustRefID" size="20" value = "PCNoAVS" class="textfield">
	<input type="hidden" name="PONumber" size="20" value = "123" class="textfield">
	<input type="hidden" name="Amount" size="5" value = "<?php echo $amount; ?>" class="textfield">
	<input type="hidden" name="WalletDescription" size="10" value = "test">

	<!--00 = Daily 10 = Weekly 20 = Bi-Monthly 30 = Every 4 weeks 40 = Every 8 Weeks 51 = Specified Day of the Month 70 = Quarterly 80 = Yearly 90 = Single-->
	<input type="hidden" name="PaymentFrequency" size="10" value = "51">

	<input type="hidden" name="NumberOfPayments" size="10" value = "">

	<input type="hidden" name="StartDate" size="10" value = "<?php echo $startDate; ?>">

	<input type="hidden" name="ShipToZip" size="20" value = "<?php echo $zip; ?>" >
	<input type="hidden" name="FullName" size="20" value = "<?php echo $name; ?>">
	<input type="hidden" name="Address1" size="50" value = "<?php echo $address1; ?>">
	<input type="hidden" name="Address2" size="50" value = "<?php echo $address2; ?>">
	<input type="hidden" name="City" size="40" value = "<?php echo $city; ?>">
	<input type="hidden" name="State" size="40" value = "<?php echo $state; ?>">
	<input type="hidden" name="Zip" size="9" value = "<?php echo $zip; ?>">
	<input type="hidden" name="PhoneNumber" size="15" value = "<?php echo $phoneNumber; ?>">
	<input type="hidden" name="Email" size="75" value = "<?php echo $email; ?>">
	<table width="300" cellpadding="0" cellspacing="0" border="0" align="center">
		<tr valign="top">
			<td>
			Name:
			</td>
			<td>
			<?php echo $name; ?>
			</td>
		</tr>
		<tr valign="top">
			<td>
			Address:
			</td>
			<td>
			<?php echo $address1 . " " . $address2; ?>
			</td>
		</tr>
		<tr valign="top">
			<td>
			City:
			</td>
			<td>
			<?php echo $city; ?>
			</td>
		</tr>
		<tr valign="top">
			<td>
			State:
			</td>
			<td>
			<?php echo $state; ?>
			</td>
		</tr>
		<tr valign="top">
			<td>
			Zip:
			</td>
			<td>
			<?php echo $zip; ?>
			</td>
		</tr>
		<tr valign="top">
			<td>
			Phone Number:
			</td>
			<td>
			<?php echo $phoneNumber; ?>
			</td>
		</tr>
		<tr valign="top">
			<td>
			Email:
			</td>
			<td>
			<?php echo $email; ?>
			</td>
		</tr>
	</table>
	<br />
	<table width="300" cellpadding="0" cellspacing="0" border="0" align="center">
		<tr valign="top">
			<td width="150">Payment Time</td>
			<td width="150">
				<!--CC = Credit Card (Default) PC = Purchase Card ACHC = ACH Checking ACHS = ACH Savings-->   
				<select name="PaymentType" class="textfield">
					<option Selected = "selected" value="PC"></option>
					<option value="CC">Credit Card </option>
					<option value="PC">Business Card</option>
					<option value="ACHC">EFT Checking</option>
					<option value="ACHS">EFT Savings</option>
				</select>
			</td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr valign="top">
			<td colspan="2" align="center"><input type="submit" name="Go" value="Make Payment" class="Button"></td>
		</tr>
	</table>
</form>
