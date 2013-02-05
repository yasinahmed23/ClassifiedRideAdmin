<!--Dealer Passwords Matches -->
<SCRIPT TYPE="text/javascript">
verify = new verifynotify();
verify.field1 = document.DealerRegisterForm.DealerPassword;
verify.field2 = document.DealerRegisterForm.DealerPassword2;
verify.result_id = "password_result";
verify.match_html = "";
verify.nomatch_html = "<SPAN STYLE=\"color:red\">Passwords must match<\/SPAN>";
// Update the result message
verify.check();
// -->
</SCRIPT>


<!--Dealer Email Matches -->
<SCRIPT TYPE="text/javascript">
verify2 = new verifynotify();
verify2.field1 = document.DealerRegisterForm.DealerEmail;
verify2.field2 = document.DealerRegisterForm.DealerEmail2;
verify2.result_id = "email_result";
verify2.match_html = "";
verify2.nomatch_html = "<SPAN STYLE=\"color:red\">Emails must match<\/SPAN>";
// Update the result message
verify2.check();
// -->
</SCRIPT>

<!--Dealer Pay Email Matches -->
<SCRIPT TYPE="text/javascript">
verify3 = new verifynotify();
verify3.field1 = document.DealerRegisterForm.AccountPayableEmail;
verify3.field2 = document.DealerRegisterForm.AccountPayableEmail2;
verify3.result_id = "Payemail_result";
verify3.match_html = "";
verify3.nomatch_html = "<SPAN STYLE=\"color:red\">Emails must match<\/SPAN>";
// Update the result message
verify3.check();
// -->
</SCRIPT>

<!--Dealer Lead Email Matches -->
<SCRIPT TYPE="text/javascript">
verify4 = new verifynotify();
verify4.field1 = document.DealerRegisterForm.LeadEmail;
verify4.field2 = document.DealerRegisterForm.LeadEmail2;
verify4.result_id = "Leademail_result";
verify4.match_html = "";
verify4.nomatch_html = "<SPAN STYLE=\"color:red\">Emails must match<\/SPAN>";
// Update the result message
verify4.check();
// -->
</SCRIPT>

<!--VALIDATE NO EMPTY FIELDS & VALIDATE EMAILL ADDRESES UPON FORM SUBMISSION-->
<script type="text/javascript">
function validateDealerForm()
{
	var username=document.forms["DealerRegisterForm"]["DealerUserName"].value;
	var password=document.forms["DealerRegisterForm"]["DealerPassword"].value;
	var password2=document.forms["DealerRegisterForm"]["DealerPassword2"].value;
  	var DealerName=document.forms["DealerRegisterForm"]["DealerName"].value;
 	var street=document.forms["DealerRegisterForm"]["DealerStreet1"].value;	
	var city=document.forms["DealerRegisterForm"]["DealerCity"].value;
	var state=document.forms["DealerRegisterForm"]["DealerState"].value
	var zip=document.forms["DealerRegisterForm"]["DealerZip"].value;
	var country=document.forms["DealerRegisterForm"]["DealerCountry"].value;
	var DealerWebsite=document.forms["DealerRegisterForm"]["DealerWebsite"].value;
	var Franchise=document.forms["DealerRegisterForm"]["Franchise"].value;
	var DealerMainContactFirst=document.forms["DealerRegisterForm"]["DealerMainContactFirst"].value;
	var DealerMainContactLast=document.forms["DealerRegisterForm"]["DealerMainContactLast"].value;
	var cell1=document.forms["DealerRegisterForm"]["DealerCellPhone1"].value;
	var cell2=document.forms["DealerRegisterForm"]["DealerCellPhone2"].value;
	var cell3=document.forms["DealerRegisterForm"]["DealerCellPhone3"].value;
	var home1=document.forms["DealerRegisterForm"]["DealerOfficePhone1"].value;
	var home2=document.forms["DealerRegisterForm"]["DealerOfficePhone2"].value;
	var home3=document.forms["DealerRegisterForm"]["DealerOfficePhone3"].value;
	var email=document.forms["DealerRegisterForm"]["DealerEmail"].value;
	var email2=document.forms["DealerRegisterForm"]["DealerEmail2"].value;
	var ContactPosition=document.forms["DealerRegisterForm"]["ContactPosition"].value;
	
	var PayFname=document.forms["DealerRegisterForm"]["AccountPayFirstName"].value;
	var PayLname=document.forms["DealerRegisterForm"]["AccountPayLastName"].value;
  	var PayEmail=document.forms["DealerRegisterForm"]["AccountPayableEmail"].value;
	var PayEmail=document.forms["DealerRegisterForm"]["AccountPayableEmail"].value;
	var PayEmail2=document.forms["DealerRegisterForm"]["AccountPayableEmail2"].value;
	var PayPhone1=document.forms["DealerRegisterForm"]["AccountPayableCell1"].value;
	var PayPhone2=document.forms["DealerRegisterForm"]["AccountPayableCell2"].value;
	var PayPhone3=document.forms["DealerRegisterForm"]["AccountPayableCell3"].value;
	var LeadCell1=document.forms["DealerRegisterForm"]["LeadCell1"].value;
	var LeadCell2=document.forms["DealerRegisterForm"]["LeadCell2"].value;
	var LeadCell3=document.forms["DealerRegisterForm"]["LeadCell3"].value;
	var LeadEmail=document.forms["DealerRegisterForm"]["LeadEmail"].value;
	var LeadEmail2=document.forms["DealerRegisterForm"]["LeadEmail2"].value;
	var DataFeedProvider=document.forms["DealerRegisterForm"]["DataFeedProvider"].value;
	var OtherDataFeedProvider=document.forms["DealerRegisterForm"]["OtherDataFeedProvider"].value;
	var DataFeedMainContactFirst=document.forms["DealerRegisterForm"]["DataFeedMainContactFirst"].value;
	var DataFeedMainContactLast=document.forms["DealerRegisterForm"]["DataFeedMainContactLast"].value;
	var DataFeedMainPhone1=document.forms["DealerRegisterForm"]["DataFeedMainPhone1"].value;
	var DataFeedMainPhone2=document.forms["DealerRegisterForm"]["DataFeedMainPhone2"].value;
	var DataFeedMainPhone3=document.forms["DealerRegisterForm"]["DataFeedMainPhone3"].value;
	var DataFeedMainEmail=document.forms["DealerRegisterForm"]["DataFeedMainEmail"].value;
	var UsedCarsInStock=document.forms["DealerRegisterForm"]["UsedCarsInStock"].value;
	var Rep=document.forms["DealerRegisterForm"]["search_string"].value;
	var searchEmployees=document.forms["DealerRegisterForm"]["Program"].value;
	var Program=document.forms["DealerRegisterForm"]["Program"].value;
	var Authorization=document.forms["DealerRegisterForm"]["Authorization"].value;
	var AgentFirstName=document.forms["DealerRegisterForm"]["AgentFirstName"].value;	
	var AgentLastName=document.forms["DealerRegisterForm"]["AgentLastName"].value;
	var DateSigned=document.forms["DealerRegisterForm"]["date"].value;	
		
	
	if (username==null || username=="")
	{alert("DealerUserName must be filled out");
	return false;}
	
	if (password==null || password=="")
	{alert("Password must be filled out");
	return false;}
	
	if (password2==null || password2=="")
	{alert("Re-enter Password");
	return false;}
	
	if (password!==password2)
	{alert("Passwords Must Match");
	return false;} 
	
	if (DealerName==null || DealerName=="")
	{alert("Enter Dealership Name");
	return false;}

	if (street==null || street=="")
	{alert("Please enter your street address");
	return false;} 	
	
	if (city==null || city=="")
	{alert("Please enter your city");
	return false;}  
	
	if (state==null || state=="")
	{alert("Please enter your state");
	return false;}  
	
	if (zip==null || zip=="")
	{alert("Please enter your zip");
	return false;} 
	
	if (country==null || country=="")
	{alert("Please enter your country");
	return false;}  

	if (DealerWebsite==null || DealerWebsite=="")
	{alert("Please enter the Dealership's website");
	return false;}

	if (Franchise=="Please Select")
	{alert("Please let us know if u are part of a Dealer Group/Franchise");
	return false;}	
	
	if (DealerMainContactFirst==null || DealerMainContactFirst=="")
	{alert("Please let us know the first name of the Dealership's main contact");
	return false;} 	
	
	if (DealerMainContactLast==null || DealerMainContactLast=="")
	{alert("Please let us know the last name of the Dealership's main contact");
	return false;}  
	
	if (cell1==null || cell1=="")
	{alert("Please check your cell area code");
	return false;} 
	
	if (cell2==null || cell2=="")
	{alert("Please check your cell phone #");
	return false;}  
	
	if (cell3==null || cell3=="")
	{alert("Please check your cell phone #");
	return false;} 
	
	if (home1==null || home1=="")
	{alert("Please check your home area code");
	return false;}
		
	if (home2==null || home2=="")
	{alert("Please check your home phone #");
	return false;}
	
	if (home3==null || home3=="")
	{alert("Please check your home phone #");
	return false;} 
	
	if (email==null || email=="")
	{alert("Please enter your email address");
	return false;} 
	
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
  		{
  			alert("Not a valid e-mail address");
  		return false;
  		}

	if (email2==null || email2=="")
	{alert("Please re-enter email address");
	return false;} 
	
	if (email!==email2)
	{alert("Email Addresses Must Match");
	return false;} 

	if (ContactPosition==null || ContactPosition=="")
	{alert("Please enter your job title");
	return false;}

	if (PayFname==null || PayFname=="")
	{alert("Please enter firstname for pay");
	return false;}
	
	if (PayLname==null || PayLname=="")
	{alert("Please enter lastname for pay");
	return false;}
	
	
	if (PayEmail==null || PayEmail=="")
	{alert("Please enter your email for pay");
	return false;}

	var atpos2=PayEmail.indexOf("@");
	var dotpos2=PayEmail.lastIndexOf(".");
	if (atpos2<1 || dotpos2<atpos2+2 || dotpos2+2>=PayEmail.length)
  		{
  			alert("Please enter a valid emaill address for pay");
  		return false;
  		}
	
	if (PayEmail2==null || PayEmail2=="")
	{alert("Please re-enter your email for pay");
	return false;}
	
	if (PayEmail!==PayEmail2)
	{alert("Email for pay Must Match");
	return false;} 
	
	if (PayPhone1==null || PayPhone1=="")
	{alert("Please check your area code for pay");
	return false;}
	
	if (PayPhone2==null || PayPhone2=="")
	{alert("Please check your phone # for pay");
	return false;}
	
	if (PayPhone3==null || PayPhone3=="")
	{alert("Please check your phone # for pay");
	return false;}	

	if (LeadCell1==null || LeadCell1=="")
	{alert("Please check your area code for leads");
	return false;}
	
	if (LeadCell2==null || LeadCell2=="")
	{alert("Please check your phone # for leads");
	return false;}
	
	if (LeadCell3==null || LeadCell3=="")
	{alert("Please check your phone # for leads");
	return false;}

	if (LeadEmail==null || LeadEmail=="")
	{alert("Please enter your email for pay");
	return false;}

	var atpos3=LeadEmail.indexOf("@");
	var dotpos3=LeadEmail.lastIndexOf(".");
	if (atpos3<1 || dotpos3<atpos3+2 || dotpos3+2>=LeadEmail.length)
  		{
  			alert("Please enter a valid emaill address for leads");
  		return false;
  		}
	
	if (LeadEmail2==null || LeadEmail2=="")
	{alert("Please re-enter your email for leads");
	return false;}
	
	if (LeadEmail!=LeadEmail2)
	{alert("Email for leads Must Match");
	return false;} 

	
	if (DataFeedProvider==null || DataFeedProvider=="")
	{alert("Please enter the Data Feed Provider");
	return false;}

	if (DataFeedMainContactFirst==null || DataFeedMainContactFirst=="")
	{alert("Please enter the firstname of the Data Feed Provider Main Contact");
	return false;}

	if (DataFeedMainContactLast==null || DataFeedMainContactLast=="")
	{alert("Please enter the lastname of the Data Feed Provider Main Contact");
	return false;}

	if (DataFeedMainPhone1==null || DataFeedMainPhone1=="")
	{alert("Please enter the area code for the phone number of the Data Feed Provider Main Contact");
	return false;}

	if (DataFeedMainPhone2==null || DataFeedMainPhone2=="")
	{alert("Please enter the phone number of the Data Feed Provider Main Contact");
	return false;}

	if (DataFeedMainPhone3==null || DataFeedMainPhone3=="")
	{alert("Please enter the phone number of the Data Feed Provider Main Contact");
	return false;}

	if (DataFeedMainEmail==null || DataFeedMainEmail=="")
	{alert("Please enter the emailfor the Data Feed Provider Main Contact");
	return false;}

	if (UsedCarsInStock==null || UsedCarsInStock=="")
	{alert("Please enter the used cars in stock that you would be wanting to list");
	return false;}

	
	
	
	if (AgentFirstName==null || AgentFirstName=="")
	{alert("Please enter the agent's firstname.");
	return false;}


	if (AgentLastName==null || AgentLastName=="")
	{alert("Please enter the agent's lastname.");
	return false;}

	if (DateSigned==null || DateSigned=="")
	{alert("Please Select Today's Date.");
	return false;}
	
	if(!DealerRegisterForm.Authorization.checked){alert('You must Authorize first.');return false}
}
</script>

<!-- VALIDATE #s are #s -->
<script type="text/javascript">
function validateNumericValues(node) {
	var node = (node.value); 
	//alert(node);
	if (isNaN(node)==true)
	{alert("Please use only numbers");
	return false;}	
}
</script>

<!-- VALIDATE minimum lengths on #'s -->
<script type='text/javascript'>
function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter the correct amount of #'s");
		elem.focus();
		return false;
	}
}
</script>


