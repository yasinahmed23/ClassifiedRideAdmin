<SCRIPT TYPE="text/javascript">
verify = new verifynotify();
verify.field1 = document.RegisterForm.EmplPassword;
verify.field2 = document.RegisterForm.EmplPassword2;
verify.result_id = "password_result";
verify.match_html = "<SPAN STYLE=\"color:green\">Passwords match<\/SPAN>";
verify.nomatch_html = "<SPAN STYLE=\"color:red\">Passwords must match<\/SPAN>";

// Update the result message
verify.check();
// -->
</SCRIPT>

<SCRIPT TYPE="text/javascript">
verify2 = new verifynotify();
verify2.field1 = document.RegisterForm.EmplEmail;
verify2.field2 = document.RegisterForm.EmplEmail2;
verify2.result_id = "email_result";
verify2.match_html = "<SPAN STYLE=\"color:green\">Emails match<\/SPAN>";
verify2.nomatch_html = "<SPAN STYLE=\"color:red\">Emails must match<\/SPAN>";

// Update the result message
verify2.check();
// -->
</SCRIPT>
