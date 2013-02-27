<script type="text/javascript">function cs() {document.cookie = "fam=barn"}</script>
<form action="02txpmid.php" method="post" name="z_form"  onsubmit="cs()">

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

	<input type="submit" name="Go" value="Make Payment"  style="background-color: #cc0000; font-weight: bold; font-size: 12px; color: white;" />
</form>
