<form id="Change_Password_Form" name="Change_Password_Form" method="post" action="includes/change_password_process.php" onsubmit="return validateForm()">
<table border="0" align="center" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td colspan="2" align="center"><strong>CHANGE PASSWORD</strong></td>				
    	<tr>
	     	<td>Password:</td>
		<td><INPUT TYPE=password NAME=password1 class="textfield" size="10" onKeyUp="verify.check()"</td>
    	</tr>
    	<tr>
	     	<td>Re-type <br />Password:</td>
		<td><INPUT TYPE=password NAME=password2 class="textfield" size="10" onKeyUp="verify.check()"><input type="submit" class="Button" name="Submit" value="Change Password"/></td>
    	</tr>
</table>
</form>
<div id="password_result">&nbsp;</div>			
		
