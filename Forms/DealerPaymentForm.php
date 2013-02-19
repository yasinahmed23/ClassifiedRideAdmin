<script type="text/javascript">function cs() {document.cookie = "fam=barn"}</script>
<form action="02txpmid.php" method="post" name="z_form"  onsubmit="cs()">
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
<table width="300" cellpadding="0" cellspacing="0" border="0" align="center">
		<tr valign="top">
			<td width="150">AMOUNT:<input type="text" name="Amount" size="5" value = "" class="textfield">
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
			<td width="150">Amount:</td>
			<td width="150"><?php echo "$" . number_format($MthlyPmt) . ".00";; ?></td>
		</tr>
		<tr valign="top">
			<td width="150">Payment Type:</td>
			<td width="150">
				<!--CC = Credit Card (Default) PC = Purchase Card ACHC = ACH Checking ACHS = ACH Savings-->   
				<!--<select name="PaymentType" class="textfield">
					<option Selected = "selected" value="PC"></option>
					<option value="CC">Credit Card </option>
					<option value="PC">Business Card</option>
					<option value="ACHC">EFT Checking</option>
					<option value="ACHS">EFT Savings</option>
				</select>-->
				<input type="text" name="PaymentType" size="20" value = "CC">
			</td>
		</tr>
		<tr valign="top"><td colspan="2"><font size="-2"><em>For your convenience, your payment method will be saved for automatic payments.  Today's Date will be your due date every month.  <br />You can cancel at any time.</em></font></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr valign="top">
			<td colspan="2" align="center"><input type="submit" name="Go" value="Make Payment"  style="background-color: #cc0000; font-weight: bold; font-size: 12px; color: white;" /></td>
		</tr>
	</table>
</form>
