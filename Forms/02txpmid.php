<?php
extract ($_POST);

$cp="cert";              //values are "cert" or "prod"
//$PaymentType = "CC";   //uncomment to limit to credit cards.
$Gateway_ID = "";
$HostedKey = "";
$RURL = "http://stephmcglathery.com/dealers/response.php";  
$CURL = "http://stephmcglathery.com/dealers/DealerPmt_Cancel.php";    

//$AVSRequired = "Y";        //uncomment to require address/zip
//$CVV2Required = "Y";       //uncomment to require CVV2
//$EmailRequired = "y";      //uncomment to require email address
//$Amount = "50.00";         //uncomment if you want a set dollar amount passed


//===============================================================
switch ($cp) {
	case "cert":
		$URL = "https://hosted.cert.transactionexpress.com";
		break;
	case "prod":
		$URL = "https://hosted.transactionexpress.com";
		break;}  
$x ='<html><body onload="document.frmReturn.submit()">';
$x .='<form action="' . $URL . '" method="post" name="frmReturn" id="frmReturn">';
$x .= '<input type="hidden" name="Gateway_ID"	value="' . $Gateway_ID . '">';
$x .= '<input type="hidden" name="HostedKey"	value="' . $HostedKey . '">';
$x .= '<input type="hidden" name="RURL"	        value="' . $RURL . '">';
$x .= '<input type="hidden" name="CURL"	value="' . $CURL . '">';
$x .= '<input type="hidden" name="RecurringType" value="' . $RecurringType . '">';
$x .= '<input type="hidden" name="PaymentType"	value="' . $PaymentType . '">';
$x .= '<input type="hidden" name="AVSRequired"	value="' . $AVSRequired . '">';
$x .= '<input type="hidden" name="CVV2Required"	value="' . $CVV2Required . '">';
$x .= '<input type="hidden" name="EmailRequired"	   value="' . $EmailRequired . '">';
$x .= '<input type="hidden" name="Amount"	value="' . $Amount . '">';
$x .= '<input type="hidden" name="CustRefID"	value="' . $CustRefID . '">';
$x .= '<input type="hidden" name="TaxIndicator"	value="' . $TaxIndicator . '">';
$x .= '<input type="hidden" name="TaxAmount"	value="' . $TaxAmount . '">';
$x .= '<input type="hidden" name="PONumber"	value="' . $PONumber . '">';
$x .= '<input type="hidden" name="ShipToZip"	value="' . $ShipToZip . '">';
$x .= '<input type="hidden" name="FullName"	value="' . $FullName . '">';
$x .= '<input type="hidden" name="Address1"	value="' . $Address1 . '">';
$x .= '<input type="hidden" name="Address2"	value="' . $Address2 . '">';
$x .= '<input type="hidden" name="City"	value="' . $City . '">';
$x .= '<input type="hidden" name="State"	value="' . $State . '">';
$x .= '<input type="hidden" name="Zip"	value="' . $Zip . '">';
$x .= '<input type="hidden" name="PhoneNumber"	value="' . $PhoneNumber . '">';
$x .= '<input type="hidden" name="Email"	value="' . $Email . '">';
$x .= '<input type="hidden" name="Descriptor"	value="' . $Descriptor . '">';
$x .= '<input type="hidden" name="SECCode"	value="' . $SECCode . '">';
$x .= '<input type="hidden" name="IndustryCode"	value="' . $IndustryCode . '">';
$x .= '<input type="hidden" name="WalletDescription"	value="' . $WalletDescription . '">';
$x .= '<input type="hidden" name="PaymentFrequency"	value="' . $PaymentFrequency . '">';
$x .= '<input type="hidden" name="NumberOfPayments"	value="' . $NumberOfPayments . '">';
$x .= '<input type="hidden" name="StartDate"	value="' . $StartDate . '">';
$x .=  "</form></body></html>";
if ($_POST) {
  if (isset($_COOKIE['fam'])){
   setcookie('fam', '', time()-3600);
     echo $x;
   }
   else {
   echo ("JavaScript is needed for this page. Please go ");
   $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
   echo "<a href='$url'>back</a>";
   echo ", turn on JavaScript and try again - thanks!"; 	
}}
