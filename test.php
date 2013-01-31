
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>TXP Hosted Test</title>
</head>
<body>
TFHost Jens Test Page
<form action="https://10.255.14.30/Transaction/Transaction/Index" method="post" name="z_form">
<pre>
GatewayID     <input type="text" name="Gateway_ID" size="20" value ="7777777865"> 
HostedKey     <input type="text" name="HostedKey" size="20" value = "9cd9aab0-6785-451f-b4a0-9f90436d2c05">
RURL          <input type="text" name="RURL" size="20" value = "stephmcglathery.com/Dealers.php">
CURL          <input type="text" name="CURL" size="20" value = "stephmcglathery.com/Dealers.php">
		<input type='hidden' name='EmailRequired' id='EmailRequired' value='Y' />
<input type="hidden" name="RecurringType" id="RecurringType" value="A" />
<!--A=Recurring  M=Wallet  N=None (default)
RecurringType <select name="RecurringType">
                   <option selected = "selected" value="M"></option>
                   <option value="A">A</option>
                   <option value="M">M</option>
                   <option value="N">N</option>
                </select>-->
CC = Credit Card (Default) PC = Purchase Card ACHC = ACH Checking ACHS = ACH Savings
PaymentType    <select name="PaymentType">
                   <option Selected = "selected" value="PC"></option>
                   <option value="CC">Credit Card </option>
                   <option value="PC">Purchase Card</option>
                   <option value="ACHC">ACH Checking</option>
                   <option value="ACHS">ACH Savings</option>
               </select>
AVSRequired     <input type="text" name="AVSRequired" size="20" value = "Y">
CVV2Required    <input type="text" name="CVV2Required" size="20" value = "Y">
Amount          <input type="text" name="Amount" size="20" value = "1.31">
CustRefID       <input type="text" name="CustRefID" size="20" value = "PCNoAVS">
0 = None 1 = Taxable 2 = Tax-Exempt
TaxIndicator   <select name="TaxIndicator">
                   <option value="">1</option>
                   <option value="0">None </option>
                   <option value="1">Taxable</option>
                   <option value="2">Tax-exempt</option>
               </select>
TaxAmount       <input type="text" name="TaxAmount" size="20"  value = "1.02">
PONumber        <input type="text" name="PONumber" size="20" value = "123">
ShipToZip       <input type="text" name="ShipToZip" size="20" value = "80021">
FullName        <input type="text" name="FullName" size="20" value = "TF Tests">
Address1        <input type="text" name="Address1" size="50" value = "12202 Airport Way">
Address2        <input type="text" name="Address2" size="50" value = "Address2">
City            <input type="text" name="City" size="40" value = "Broomfield">
State           <input type="text" name="State" size="40" value = "CO">
Zip             <input type="text" name="Zip" size="9" value = "80021">
PhoneNumber     <input type="text" name="PhoneNumber" size="15" value = "3033030000">
Email           <input type="text" name="Email" size="75" value = "jdear@transfirst.com">
<input type='hidden' name='Descriptor' id='Descriptor' value='ACH Test' />
<input type='hidden' name='SECCode' id='SECCode' value='1' />
<!--SECCode        <select name="SECCode">
                   <option value="2">2</option>
                   <option value="0">Telephone (TEL) </option>
                   <option value="1">Internet(WEB)</option>
                   <option value="2">Business to Consumer (PPD)</option>
                   <option value="3">Business to Business (CCD)</option>
               </select>-->
<!--IndustryCode   <select name="IndustryCode">
                   <option value="0">0</option>
                   <option value="0">MOTO</option>
                   <option value="1">Retail </option>
                   <option value="2">eCommerce </option>
                </select>-->
Industry Code  <input type="text" name="IndustryCode" id="IndustryCode" value="" />
                
perhaps  ans..50
WalletDescription <input type="text" name="WalletDescription" size="10" value = "test">

Required if RecurringType=A
PaymentFrequency  <select name="PaymentFrequency">
                <option value="10"></option>
                    <option value="00">Daily</option>
                    <option value="10">Weekly </option>
                    <option value="20">Bi-Monthly </option>
                              <option value="30">Every 4 Weeks </option>
                              <option value="40">Every 8 Weeks </option>
                              <option value="51">Specified day of the month</option>
                              <option value="70">Quarterly </option>
                              <option value="80">Yearly </option>
                              <option value="90">Single </option>
                </select>
   
if not set, payments=indefinite   Must be=1 of PaymentFrequency=90 (single payment)
NumberOfPayments  <input type="text" name="NumberOfPayments" size="10" value = "2">
StartDate         <input type="text" name="StartDate" size="10" value = "2013-01-08"> 

<input type="submit" name="Go" value="Make Payment"  style="background-color: #cc0000; font-weight: bold; font-size: 12px; color: white;" />
</pre>
</form>
