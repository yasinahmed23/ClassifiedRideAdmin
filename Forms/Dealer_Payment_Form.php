<!--PAYMENT INFORMATION -->
	<tr valign="top">
		<td colspan="2">
		<strong>Accounts Payable</strong>
		<br />
		<font size="-2">
		Please provide the name, phone, and email for Accounts Payable.
		</font>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
      		<td width="155">Accounts Payable Name</td>		
		<td width="155"><input name="AccountPayFirstName" type="text" class="textfield" id="AccountPayFirstName" size="15" maxlength="15" /><input name="AccountPayMiddleInitial" type="text" class="textfield" id="AccountPayMiddleInitial" size="1" maxlength="1" /><input name="AccountPayLastName" type="text" class="textfield" id="AccountPayLastName" size="15" maxlength="15" />
		<br />
		<font size="-2">First&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last</font></td>
	</tr>
	<tr><td>&nbsp;</td></tr>

	<tr>
	     	<td width="155">Account Payable Email:</td>
		<td width="155"><input name="AccountPayableEmail" type="text" class="textfield" id="AccountPayableEmail" size="30" onKeyUp="verify3.check()" /></td>
    	</tr>
	<tr>
	     	<td width="155">Re&dash;enter Email:</td>
		<td width="155"><input name="AccountPayableEmail2" type="text" class="textfield" id="AccountPayableEmail2" size="30" onKeyUp="verify3.check()" /></td>
    	</tr>
	<tr valign="top">
		<td width="155">&nbsp;</td>
		<td width="155">
			<div id="Payemail_result">&nbsp;</div>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
    	<tr>
	     	<td width="155">Accounts Payable Phone Number:</td>
		<td width="155">
			<input name="AccountPayableCell1" type="text" class="textfield" id="AccountPayableCell1" size="3" maxlength="3" onblur="validateNumericValues(AccountPayableCell1);lengthRestriction(AccountPayableCell1, 3, 3)" />
			-<input name="AccountPayableCell2" type="text" class="textfield" id="AccountPayableCell2" maxlength="3" size="3" onblur="validateNumericValues(AccountPayableCell2);lengthRestriction(AccountPayableCell2, 3, 3)" />
			-<input name="AccountPayableCell3" type="text" class="textfield" id="AccountPayableCell3" size="3" maxlength="4" onblur="validateNumericValues(AccountPayableCell3);lengthRestriction(AccountPayableCell3, 4, 4)" /></td>
    	</tr>
	<!--PAYMENT INFORMATION -->
