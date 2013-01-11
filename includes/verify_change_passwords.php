<SCRIPT TYPE="text/javascript">
verify = new verifynotify();
verify.field1 = document.Change_Password_Form.password1;
verify.field2 = document.Change_Password_Form.password2;
verify.result_id = "password_result";
verify.match_html = "";
verify.nomatch_html = "<SPAN STYLE=\"color:red\">Passwords must match<\/SPAN>";

// Update the result message
verify.check();

// -->
</SCRIPT>
<SCRIPT TYPE="text/javascript">
function validateForm()
{
  var password1=document.forms["Change_Password_Form"]["password1"].value;
  var password2=document.forms["Change_Password_Form"]["password2"].value;

if (password1==null || password1=="")
	{alert("Password cannot be blank");
	return false;}
	
	
	if (password2==null || password2=="")
	{alert("Please Re-enter Password");
	return false;}
	
	if (password1!==password2)
	{alert("Passwords Must Match");
	return false;} 
}
</script>
