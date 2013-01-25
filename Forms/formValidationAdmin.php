<!--Employee Passwords Matches -->
<SCRIPT TYPE="text/javascript">
verify = new verifynotify();
verify.field1 = document.AddMemberForm.AdminPass;
verify.field2 = document.AddMemberForm.AdminPass2;
verify.result_id = "password_result";
verify.match_html = "";
verify.nomatch_html = "<SPAN STYLE=\"color:red\">Passwords must match<\/SPAN>";
// Update the result message
verify.check();
// -->
</SCRIPT>





