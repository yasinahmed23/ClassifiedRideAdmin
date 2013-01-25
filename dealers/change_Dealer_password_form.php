<form id="Change_Password_Form" name="Change_Password_Form" method="post" action="/dealers/change_Dealer_password_process.php" onSubmit="alert('You have changed your password ');">
<table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
      		<td>
			<table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr valign="top">
					<td colspan="2" align="center"><strong>CHANGE PASSWORD</strong></td>
								
				
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
					<td width="125"><input type="submit" name="Submit" value="Submit" /></td>
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
