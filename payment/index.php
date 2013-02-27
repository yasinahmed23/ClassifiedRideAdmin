<script language="JavaScript">
	var nVisaCardType 				= 0;
	var nMastercardCardType 		= 1;
	var nDiscoverCardType			= 2;
	var nAmexCardType				= 3;
	var nDinersClubCardType			= 4;
	var nCarteBlancheCardType		= 5;
	var nEnRouteCardType			= 6;
	var nJCBCardType				= 7;
	var nUnknownCardType			= 8;	
	var cardPics = new Array();

	cardPics[nVisaCardType] = new Image();
	cardPics[nVisaCardType].src="images/cards/visa.jpg";
	cardPics[nMastercardCardType] = new Image();
	cardPics[nMastercardCardType].src="images/cards/mastercard.jpg";
	cardPics[nDiscoverCardType] = new Image();
	cardPics[nDiscoverCardType].src="images/cards/discover.jpg";
	cardPics[nAmexCardType] = new Image();
	cardPics[nAmexCardType].src="images/cards/amex.jpg";
	cardPics[nDinersClubCardType] = new Image();
	cardPics[nDinersClubCardType].src="images/cards/dinersclub.jpg";
	cardPics[nCarteBlancheCardType] = new Image();
	cardPics[nCarteBlancheCardType].src="images/cards/carteblanche.jpg";
	cardPics[nEnRouteCardType] = new Image();
	cardPics[nEnRouteCardType].src="images/cards/enroute.jpg";
	cardPics[nJCBCardType] = new Image();
	cardPics[nJCBCardType].src="images/cards/jcb.jpg";	
	cardPics[nUnknownCardType] = new Image();
	cardPics[nUnknownCardType].src="images/cards/invalid.gif";

	//
	// Algorithm to verify a credit number is valid
	//
	function checkLuhn10(number) {
  	  if (number.length > 19)
    	    return (false);

  	  sum = 0; mul = 1; l = number.length;
  	  for (i = 0; i < l; i++) {
    	    digit = number.substring(l-i-1,l-i);
	    tproduct = parseInt(digit ,10)*mul;
	    if (tproduct >= 10)
	      sum += (tproduct % 10) + 1;
	    else
	      sum += tproduct;
	    if (mul == 1)
	      mul++;
	    else
	      mul--;
	  }

	  if ((sum % 10) == 0)
	    return (true);
	  else
	    return (false);
	}

	//
	// Determine the credit card type from the credit card number
	//
	function getCardType(number) {
		var numLength = number.length;
		
		if(numLength > 4)
		{
			if((number.charAt(0) == '4') && ((numLength == 13)||(numLength==16)))
				return(cardPics[nVisaCardType].src);
			else if((number.charAt(0) == '5' && ((number.charAt(1) >= '1') && (number.charAt(1) <= '5'))) && (numLength==16))
				return(cardPics[nMastercardCardType].src);
			else if(number.substring(0,4) == "6011" && (numLength==16))
				return(cardPics[nDiscoverCardType].src);
			else if((number.charAt(0) == '3' && ((number.charAt(1) == '4') || (number.charAt(1) == '7'))) && (numLength==15))
				return(cardPics[nAmexCardType].src);
			else if((number.charAt(0) == '3') && (numLength==16))
				return(cardPics[nJCBCardType].src);
			else if(((number.substring(0, 4) == "2131") || (number.substring(0, 4) == "1800")) && (numLength==15))
				return(cardPics[nJCBCardType].src);
			else if(((number.substring(0, 4) == "2014") || (number.substring(0, 4) == "2149")) && (numLength==15))
				return(cardPics[nEnRouteCardType].src);
			else if((number.charAt(0) == '3') && (number.charAt(1) == '8') && (numLength == 14))
				return(cardPics[nCarteBlancheCardType].src);
			else if((number.charAt(0) == '3') && (((number.charAt(1) == '0') && ((number.charAt(2) >= '0') && (number.charAt(2) <= '5'))) 
				|| (number.charAt(1) == '6')) && (numLength == 14))
				return(cardPics[nDinersClubCardType].src);
	    }

	    return(cardPics[nUnknownCardType].src);	  
	}


	function handleCCTyping (field, event) {
		var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;

      if (field.card_num.value.length >= 13) 
      {
      	if(!checkLuhn10(field.card_num.value))
			{
				field.cardimage.src=cardPics[nUnknownCardType].src;
			}
			else
			{
				field.cardimage.src=getCardType(field.card_num.value);
			}
		} else {
			field.cardimage.src=cardPics[nUnknownCardType].src;
		}

		return true;
	}


	function copyAddress() 
	{ 	
		if(document.form1.sInfo.checked == true ) 
		{ 
			document.form1.shipping_first_name.value 	= document.form1.first_name.value ; 
			document.form1.shipping_last_name.value 	= document.form1.last_name.value ; 
			document.form1.shipping_address.value 		= document.form1.address.value ; 
			document.form1.shipping_city.value 			= document.form1.city.value ; 
			document.form1.shipping_zip.value 			= document.form1.zip.value ; 
			document.form1.shipping_state.value 		= document.form1.state.value ; 
			<? if(!$GatewaySettings['AllowInternational']) { ?>			
				document.form1.shipping_state.selectedIndex  = document.form1.shipping_state.selectedIndex;
			<? } ?>
			document.form1.shipping_country.value 		= document.form1.country.value ; 
			document.form1.shipping_country.selectedIndex = document.form1.country.selectedIndex;
		} 
	}


</script>
<script language="JavaScript">
<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=590,height=245,left = 490,top = 312');");
}
// End -->
</script>

	<form method="post" name="form1" id="form1" action="process_transaction.php"> 
	  <p align="center">&nbsp;</p>
	  <h2 align="center">PROCESS CREDIT CARD</h1>
	  <table border="0" align="center" cellpadding="0" cellspacing="0">
	    <tr class="background">
	      <td><table width="600" border="0" cellpadding="3" cellspacing="1" class="front">
	  <tr>
		  <td colspan="2" class="highlight">Transaction Details  </td>
		</tr>
		<tr>
		  <td>Amount:</td>
		  <td> $
	<input name="amount" type="text" size="10" maxlength="20" value="<? print $_REQUEST['amount']; ?>" class="textfield" >
		 </td>
		</tr>      
		    <tr>
		      <td colspan="2">&nbsp;</td>
		      </tr>
		    <tr>
		  <td colspan="2" class="highlight">Billing Information</td>
		</tr>
		<tr>
		  <td> First Name: </td>
		  <td>
		    <input name="first_name" type="text" id="first_name" size="40" maxlength="50" value="<? print $_REQUEST['first_name']; ?>" class="textfield">          </td>
		</tr>
		<tr>
		  <td>Last Name:</td>
		  <td>
		    <input name="last_name" type="text" id="last_name" size="40" maxlength="50" value="<? print $_REQUEST['last_name']; ?>" class="textfield">          </td>
		</tr>
		<tr>
		  <td>Address: </td>
		  <td>
		    <input name="address" type="text"  size="40" maxlength="60" value="<? print $_REQUEST['address']; ?>" class="textfield">          </td>
		</tr>
		<tr>
		  <td>City: </td>
		  <td>
		    <input name="city" type="text" size="40" maxlength="40" value="<? print $_REQUEST['city']; ?>" class="textfield">          </td>
		</tr>
		<tr>
		  <td>State: </td>
		  <td>
		    <? if($GatewaySettings['AllowInternational']) { ?>
		    <input name="state" type="text" size="40" maxlength="40" value="<? print $_REQUEST['state']; ?>" class="textfield">
		    <? } else { ?>
		    <select name="state" id="select" > 
		      <? print printStateDropdown($_REQUEST['state']); ?>
		    </select>
		    <? } ?>          </td>
		</tr>
		<tr>
		  <td>Zip: </td>
		  <td>
		    <input name="zip" type="text" size="10" maxlength="20" value="<? print $_REQUEST['zip']; ?>" class="textfield">          </td>
		</tr>
		<tr>
		  <td>Country: </td>
		  <td>
		    <select name="country" id="select2">
		      <? if($GatewaySettings['AllowInternational']) { ?>
		      <option value="">Select a country</option>
		      <? print_ISOSelectOptions($ISO3166TwoToName, true, $_REQUEST['country']); ?>
		      <? } else { ?>
		      <option value="US">United States</option>
		      <? } ?>
		    </select>          </td>
		</tr>
		<tr>
		  <td>Phone Number: </td>
		  <td>
		    <input name="phone" type="text"  size="20" maxlength="25" value="<? print $_REQUEST['phone']; ?>" class="textfield">          </td>
		</tr>
		<tr>
		  <td>Email Address: </td>
		  <td>
		    <input name="email" type="text"  size="40" maxlength="248" value="<? print $_REQUEST['email']; ?>" class="textfield">          </td>
		</tr>
		<tr>
		  <td>Credit Card Number: </td>
		  <td>
		    <input name="card_num" type="text"  size="22"  maxlength="22" onChange="handleCCTyping(this.form, event);" onKeyUp="handleCCTyping(this.form, event);" class="textfield" ><img name="cardimage" src="images/cards/invalid.gif"  height="24" width="36" hspace="10" vspace="0"></td></tr>
		<tr>
		  <td>Expiration Date:</td>
		  <td><select name="exp_month" id="select3">
		      <? print printMonthDropdown($_REQUEST['exp_month']); ?>
		    </select>
		      <select name="exp_year" id="select4">
		        <? print printYearDropdown($_REQUEST['exp_year']); ?>
		      </select></td>
		</tr>
		<tr>
		  <td>Security Code:</td>
		  <td>
		    <input name="card_code" type="text" size="4" maxlength="4" value="<? print $_REQUEST['card_code']; ?>" class="textfield">      <A HREF="javascript:popUp('cvv.html')">What is this?</A></td>
		</tr>
		<tr>
		  <td colspan="2">&nbsp;</td>
		</tr>
		<tr>
		  <td>&nbsp;</td>
		  <td><input type="submit" name="submit" class="Button" >
	&nbsp;
	      <input type="reset" name="reset" class="Button"></td>
		</tr>
	      </table></td>
	    </tr>
	  </table>

	</form> 
