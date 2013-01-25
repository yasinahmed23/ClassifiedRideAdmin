<form id="RegisterForm" name="RegisterForm" method="post" action="reg_process.php" onSubmit="alert('Thank you for registering');">
<table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
      		<td>
			<table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr valign="top">
					<td colspan="2" align="center"><strong>REGISTER</strong></td>
								
				<tr>
			      		<td width="125"><label for="firstname">First Name:</label></td>		
					<td width="125"><input name="firstname" type="text" class="textfield" id="firstname" size="10" /></td>
				</tr>
				<tr>
					<td width="125"><label for="lastname">Last Name:</label></td>
					<td width="125"><input name="lastname" type="text" class="textfield" id="lastname" size="10" /></td>
				</tr>
			    	<tr>
					<td width="125"><label for="login">Username:</label></td>
					<td width="125"><input name="username" type="text" class="textfield" id="username" size="10" /></td>
			    	</tr>
				<tr>
					<td width="125"><label for="login">Email:</label></td>
					<td width="125"><input name="email" type="text" class="textfield" id="email" size="10" /></td>
			    	</tr>
			    	<tr>
				     	<td width="125"><label for="password">Password:</label></td>
					<td width="125"><INPUT TYPE=password NAME=password1 class="textfield" size="10" onKeyUp="verify.check()"</td>
			    	</tr>
			    	</tr>
			    	<tr>
				     	<td width="125"><label for="password2">Re-type Password:</label></td>
					<td width="125"><INPUT TYPE=password NAME=password2 class="textfield" size="10" onKeyUp="verify.check()"></td>
			    	</tr>
				<tr valign="top">
					<td width="125">&nbsp;</td>					
					<td width="125"><div id="password_result">&nbsp;</div></td>
				</tr>
				<tr>
					<td width="125">&nbsp;</td>
					<td width="125">&nbsp;</td>
			    	<tr>
				      	<td width="125">&nbsp;</td>	
					<td width="125"><input type="submit" name="Submit" value="Register" /></td>
				</tr>
				<tr>
					<td width="125">&nbsp;</td>
					<td width="125">&nbsp;</td>
			    	</tr>
			</table>
		</td>
	</tr>
</table>
</form>
