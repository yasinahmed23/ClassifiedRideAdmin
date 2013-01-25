<table width="600" cellpadding="10" cellspacing="0" border="0" class="table" align="center">
	<tr>
		<td>
		
			<form id="AddARForm" name="AddARForm" method="post" action="/includes/AddARProcess.php" onsubmit="return validateForm()">
			<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr valign="top">
			    		<td>
						<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
					    		<tr valign="top">
								<td colspan="2" align="center" ><font size="+1"><strong>Add AR User from Employee List</strong></font>
						    		<hr />
						    		</td>
							</tr>
						</table>
						<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr valign="top">
									     <td width="150">Employee</td>
										<td>
										<div class="dropdown">
											<input type="text" id="search_string" name="search_string" class="autocomplete">
										<br /><font size="-2">Start Typing the employee's First Name and then Select Name from list.</font>
			  
										</div>
										<div class="dropdown">
											<ul class="result"></ul>
										</div>
										</td>
						    	</tr>
							<tr><td><br /></td></tr>
							<tr valign="top">
								<td width="150">Login Info:</td>
								<td>
								<input name="ARUsername" type="text" class="textfield" id="ARUsername" size="20" maxlength="20" />
								<br />
								<div id="login_length"></div>
								<font size="-2">Username*<font>
								<br />
								<input name="ARPass" type="password" class="textfield" id="ARPass" size="20" maxlength="20" onKeyUp="verify.check()" /><input name="ARPass2" type="password" class="textfield" id="ARPass2" size="20" maxlength="20" onKeyUp="verify.check()" />
								<br />
								<div id="FormLableLeft"><font size="-2">Password*</div><div id="FormLableRight">Re-Enter Password*</div><br /><div id="password_result">&nbsp;</div><font>
								<br />
								</td>
							</tr>
							
														<tr valign="top">
								<td align="center" colspan="2">
									<br />
									<input name="Submit" type="submit" value="Submit Admin Request" id="SubmitNewHire" class="fsSubmitButton" />
								</td>
							</tr>
				
						</table>
					</td>
				</tr>
			</table>
			<h3 id="results"></h3>
			</form>
	</td>
</tr>
</table>
