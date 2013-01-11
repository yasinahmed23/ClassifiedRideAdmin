<form id="DealerRegisterForm" name="DealerRegisterForm" method="post" action="https://payflowlink.paypal.com" onsubmit="return validateDealerForm()">
	<input type="radio" name="AMOUNT" value="798" id="one">
	<label for="798">CK Boost for $798/month
	<input type="radio" name="AMOUNT" value="399" id="two">
	<label for="399">Entire Listing for $399/month</label>  
	<input type="hidden" name="LOGIN" value="ClassifiedRideTraining">
	<input type="hidden" name="PARTNER" value="PayPal">
	<input type="hidden" name="DESCRIPTION" value="<?php echo '$' . $Program . 'Program.'; ?>">
	<input type="hidden" name="TYPE" value="S">
	<div align="center"><input type="submit" value="Get Started"></div>
</form>
