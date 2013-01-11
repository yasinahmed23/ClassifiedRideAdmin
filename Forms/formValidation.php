<!--Employee Passwords Matches -->
<SCRIPT TYPE="text/javascript">
verify = new verifynotify();
verify.field1 = document.RegisterForm.EmplPassword;
verify.field2 = document.RegisterForm.EmplPassword2;
verify.result_id = "password_result";
verify.match_html = "";
verify.nomatch_html = "<SPAN STYLE=\"color:red\">Passwords must match<\/SPAN>";
// Update the result message
verify.check();
// -->
</SCRIPT>


<!--Employee Email Matches -->
<SCRIPT TYPE="text/javascript">
verify2 = new verifynotify();
verify2.field1 = document.RegisterForm.EmplEmail;
verify2.field2 = document.RegisterForm.EmplEmail2;
verify2.result_id = "email_result";
verify2.match_html = "";
verify2.nomatch_html = "<SPAN STYLE=\"color:red\">Emails must match<\/SPAN>";
// Update the result message
verify2.check();
// -->
</SCRIPT>

<!--Employee Pay Email Matches -->
<SCRIPT TYPE="text/javascript">
verify3 = new verifynotify();
verify3.field1 = document.RegisterForm.EmplPayEmail;
verify3.field2 = document.RegisterForm.EmplPayEmail2;
verify3.result_id = "Payemail_result";
verify3.match_html = "";
verify3.nomatch_html = "<SPAN STYLE=\"color:red\">Emails must match<\/SPAN>";
// Update the result message
verify3.check();
// -->
</SCRIPT>

<!--VALIDATE NO EMPTY FIELDS & VALIDATE EMAILL ADDRESES UPON FORM SUBMISSION-->
<script type="text/javascript">
function validateForm()
{
  var username=document.forms["RegisterForm"]["EmplUserName"].value;
  var password=document.forms["RegisterForm"]["EmplPassword"].value;
  var password2=document.forms["RegisterForm"]["EmplPassword2"].value;
  var fname=document.forms["RegisterForm"]["EmplFirstName"].value;
  var lname=document.forms["RegisterForm"]["EmplLastName"].value;
  var street=document.forms["RegisterForm"]["EmplStreet1"].value;
  var city=document.forms["RegisterForm"]["EmplCity"].value;
  var state=document.forms["RegisterForm"]["EmplState"].value
  var zip=document.forms["RegisterForm"]["EmplZip"].value;
  var country=document.forms["RegisterForm"]["EmplCountry"].value;
  var cell1=document.forms["RegisterForm"]["EmplCellPhone1"].value;
  var cell2=document.forms["RegisterForm"]["EmplCellPhone2"].value;
  var cell3=document.forms["RegisterForm"]["EmplCellPhone3"].value;
  var home1=document.forms["RegisterForm"]["EmplHome1"].value;
  var home2=document.forms["RegisterForm"]["EmplHome2"].value;
  var home3=document.forms["RegisterForm"]["EmplHome3"].value;
  var email=document.forms["RegisterForm"]["EmplEmail"].value;
  var email2=document.forms["RegisterForm"]["EmplEmail2"].value;
  var Referred=document.forms["RegisterForm"]["search_string"].value;
  var PayFname=document.forms["RegisterForm"]["EmplPayFirstName"].value;
  var PayLname=document.forms["RegisterForm"]["EmplPayLastName"].value;
  var PayStreet=document.forms["RegisterForm"]["EmplPayStreet1"].value;
  var PayCity=document.forms["RegisterForm"]["EmplPayCity"].value;
  var PayState=document.forms["RegisterForm"]["EmplPayState"].value;
  var PayZip=document.forms["RegisterForm"]["EmplPayZip"].value;
  var PayCountry=document.forms["RegisterForm"]["EmplPayCountry"].value;
  var PayEmail=document.forms["RegisterForm"]["EmplPayEmail"].value;
  var PayEmail2=document.forms["RegisterForm"]["EmplPayEmail2"].value;
  var PayPhone1=document.forms["RegisterForm"]["EmplPayCell1"].value;
  var PayPhone2=document.forms["RegisterForm"]["EmplPayCell2"].value;
  var PayPhone3=document.forms["RegisterForm"]["EmplPayCell3"].value;

  if (username==null || username=="")
	{alert("UserName must be filled out");
	return false;}
	
	
	if (password==null || password=="")
	{alert("Password name must be filled out");
	return false;}
	
	
	if (password2==null || password2=="")
	{alert("Re-enter Password");
	return false;}
	
	if (password!==password2)
	{alert("Passwords Must Match");
	return false;} 
	
	if (fname==null || fname=="")
	{alert("Please enter your firstname");
	return false;} 
	
	if (lname==null || lname=="")
	{alert("Please enter your lastname");
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

	if (Referred==null || Referred=="")
	{alert("Please let us know who hired you");
	return false;} 
	
	if (PayFname==null || PayFname=="")
	{alert("Please enter firstname for pay");
	return false;}
	
	if (PayLname==null || PayLname=="")
	{alert("Please enter lastname for pay");
	return false;}
	
	if (PayStreet==null || PayStreet=="")
	{alert("Please enter your street for pay");
	return false;}
	
	if (PayCity==null || PayCity=="")
	{alert("Please enter your city for pay");
	return false;}
	
	if (PayState==null || PayState=="")
	{alert("Please enter your state for pay");
	return false;}
	
	if (PayZip==null || PayZip=="")
	{alert("Please enter your zip for pay");
	return false;}
	
	if (PayCountry==null || PayCountry=="")
	{alert("Please enter your Country for pay");
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

