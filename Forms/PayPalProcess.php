<?php	

	//Enable Session Variables	
	session_start();

	//Connect to Database	
	include '../db_config2.php';

	//Save user input as variable & prevent injection
	$Program = mysql_real_escape_string($_POST['Program']);	
	$Program = stripslashes($Program);
	
?>

<form method="POST" action="https://payflowlink.paypal.com">
	<input type="hidden" name="LOGIN" value="ClassifiedRideTraining">
	<input type="hidden" name="PARTNER" value="PayPal">
	<input type="hidden" name="DESCRIPTION" value="<?php echo '$' . $Program . 'Program.'; ?>">
	<input type="hidden" name="AMOUNT" value="<?php echo $Program; ?>">
	<input type="hidden" name="TYPE" value="Transaction TYPE here">
	<input type="submit" value="Click Here to Purchase">
</form>
