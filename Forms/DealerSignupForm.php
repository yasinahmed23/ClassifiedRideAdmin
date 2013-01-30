<table width="700" cellpadding="10" cellspacing="0" border="0" class="table" align="center">
			<tr>
				<td>
				<div id="RegistrationForm">
					<form id="DealerRegisterForm" name="DealerRegisterForm" method="post" action="includes/Dealer_Registration_process.php" onsubmit="return validateDealerForm()">
					<table border="0" align="center" cellpadding="0" cellspacing="0" width="700">
						<tr valign="top">
							<td colspan="2"><font size="+1"><strong>Dealer Registration Form</strong></font></td>
						</tr>	
									<tr><td colspan="2"><hr /></td></tr>
									<tr valign="top">
								      		<td width="155"><strong>Account Login</strong>
										<br />
										<font size="-2">
										Create Username & Password
										</font></td>		
										<td width="155"><input name="DealerUserName" type="text" class="textfield" id="DealerUserName" size="20" maxlength="20" />
										<br />
										<font size="-2">Username<strong>*</strong><font>
										<br />
										<input name="DealerPassword" type="password" class="textfield" id="DealerPassword" size="20" maxlength="20" onKeyUp="verify.check()" /><input name="DealerPassword2" type="password" class="textfield" id="DealerPassword2" size="20" maxlength="20" onKeyUp="verify.check()" />
										<br />
										<font size="-2"><div id="FormLableLeft">Password<strong>*</strong></div><div id="FormLableRight">Re-Enter Password<strong>*</strong></div><br /><div id="password_result">&nbsp;</div><font><div id="password_result">&nbsp;</div>
										</td>
									</tr>
									<tr><td colspan="2"><hr /></td></tr>
									<tr valign="top">
										<td colspan="2">
										<strong>Dealership Information</strong>
										<br />
										<font size="-2">
										Please provide the following information about your dealership.
										</font>
										</td>
									</tr>
									<tr><td><br /></td></tr>			
									<tr>
								      		<td width="155">Dealership Name</td>		
										<td width="155"><input name="DealerName" type="text" class="textfield" id="DealerName" size="30" maxlength="30" />
										<br />
										</td>
									</tr>
									<tr><td>&nbsp;</td></tr>
									<tr>
										<td width="155"> Billing Address:</td>
										<td width="155"><input name="DealerStreet1" type="text" class="textfield" id="DealerStreet1" size="30" /><input name="DealerStreet2" type="text" class="textfield" id="DealerStreet2" size="30" /><br /><font size="-2"><div id="FormLableLeft">Street Address<strong>*</strong></div><div id="FormLableStreetRight">Street Address Line 2</div></font></td>
								    	</tr>
									<tr><td>&nbsp;</td></tr>
									<tr>
										<td width="155">&nbsp;</td>
										<td width="155">
										<input name="DealerCity" type="text" class="textfield" id="DealerCity" size="15" maxlength="15" />
										<input name="DealerState" type="text" class="textfield" id="DealerState" size="2" maxlength="2" /><br /><font size="-2"><div id="FormLableLeft">City<strong>*</strong></div><div id="FormLableState">State/ Province /Region<strong>*</strong></div></font>
										<br />
										</td>
								    	</tr>
								    	
									<tr>
									     	<td width="155">&nbsp;</td>
										<td width="155">
										<input name="DealerZip" type="text" class="textfield" id="DealerZip" size="5" maxlength="5" onblur="validateNumericValues(DealerZip);lengthRestriction(DealerZip, 5, 5)" />
										<select id="DealerCountry" name="DealerCountry" clas="textfield">
											<option value=''>
											  &nbsp;
											</option>
											<optgroup label="North America">
											  <option value="Antigua and Barbuda">
											    Antigua and Barbuda
											  </option>
											  <option value="Aruba">
											    Aruba
											  </option>
											  <option value="Bahamas">
											    Bahamas
											  </option>
											  <option value="Barbados">
											    Barbados
											  </option>
											  <option value="Belize">
											    Belize
											  </option>
											  <option value="Canada">
											    Canada
											  </option>
											  <option value="Cook Islands">
											    Cook Islands
											  </option>
											  <option value="Costa Rica">
											    Costa Rica
											  </option>
											  <option value="Cuba">
											    Cuba
											  </option>
											  <option value="Dominica">
											    Dominica
											  </option>
											  <option value="Dominican Republic">
											    Dominican Republic
											  </option>
											  <option value="El Salvador">
											    El Salvador
											  </option>
											  <option value="Grenada">
											    Grenada
											  </option>
											  <option value="Guatemala">
											    Guatemala
											  </option>
											  <option value="Haiti">
											    Haiti
											  </option>
											  <option value="Honduras">
											    Honduras
											  </option>
											  <option value="Jamaica">
											    Jamaica
											  </option>
											  <option value="Mexico">
											    Mexico
											  </option>
											  <option value="Netherlands Antilles">
											    Netherlands Antilles
											  </option>
											  <option value="Nicaragua">
											    Nicaragua
											  </option>
											  <option value="Panama ">
											    Panama
											  </option>
											  <option value="Puerto Rico ">
											    Puerto Rico
											  </option>
											  <option value="Saint Kitts and Nevis">
											    Saint Kitts and Nevis
											  </option>
											  <option value="Saint Lucia">
											    Saint Lucia
											  </option>
											  <option value="Saint Vincent and the Grenadines">
											    Saint Vincent and the Grenadines
											  </option>
											  <option value="Trinidad and Tobago">
											    Trinidad and Tobago
											  </option>
											  <option value="United States">
											    United States
											  </option>
											</optgroup>
											<optgroup label="South America">
											  <option value="Argentina">
											    Argentina
											  </option>
											  <option value="Bolivia">
											    Bolivia
											  </option>
											  <option value="Brazil">
											    Brazil
											  </option>
											  <option value="Chile">
											    Chile
											  </option>
											  <option value="Colombia">
											    Colombia
											  </option>
											  <option value="Ecuador">
											    Ecuador
											  </option>
											  <option value="Guyana">
											    Guyana
											  </option>
											  <option value="Paraguay">
											    Paraguay
											  </option>
											  <option value="Peru">
											    Peru
											  </option>
											  <option value="Suriname">
											    Suriname
											  </option>
											  <option value="Uruguay">
											    Uruguay
											  </option>
											  <option value="Venezuela">
											    Venezuela
											  </option>
											</optgroup>
											<optgroup label="Europe">
											  <option value="Albania">
											    Albania
											  </option>
											  <option value="Andorra">
											    Andorra
											  </option>
											  <option value="Armenia">
											    Armenia
											  </option>
											  <option value="Austria">
											    Austria
											  </option>
											  <option value="Azerbaijan">
											    Azerbaijan
											  </option>
											  <option value="Belarus">
											    Belarus
											  </option>
											  <option value="Belgium">
											    Belgium
											  </option>
											  <option value="Bosnia and Herzegovina">
											    Bosnia and Herzegovina
											  </option>
											  <option value="Bulgaria">
											    Bulgaria
											  </option>
											  <option value="Croatia">
											    Croatia
											  </option>
											  <option value="Cyprus">
											    Cyprus
											  </option>
											  <option value="Czech Republic">
											    Czech Republic
											  </option>
											  <option value="Denmark">
											    Denmark
											  </option>
											  <option value="Estonia">
											    Estonia
											  </option>
											  <option value="Faroe Islands">
											    Faroe Islands
											  </option>
											  <option value="Finland">
											    Finland
											  </option>
											  <option value="France">
											    France
											  </option>
											  <option value="Georgia">
											    Georgia
											  </option>
											  <option value="Germany">
											    Germany
											  </option>
											  <option value="Greece">
											    Greece
											  </option>
											  <option value="Hungary">
											    Hungary
											  </option>
											  <option value="Iceland">
											    Iceland


											  </option>
											  <option value="Ireland">
											    Ireland
											  </option>
											  <option value="Italy">
											    Italy
											  </option>
											  <option value="Latvia">
											    Latvia
											  </option>
											  <option value="Liechtenstein">
											    Liechtenstein
											  </option>
											  <option value="Lithuania">
											    Lithuania
											  </option>
											  <option value="Luxembourg">
											    Luxembourg
											  </option>
											  <option value="Macedonia">
											    Macedonia
											  </option>
											  <option value="Malta">
											    Malta
											  </option>
											  <option value="Moldova">
											    Moldova
											  </option>
											  <option value="Monaco">
											    Monaco
											  </option>
											  <option value="Montenegro">
											    Montenegro
											  </option>
											  <option value="Netherlands">
											    Netherlands
											  </option>
											  <option value="Norway">
											    Norway
											  </option>
											  <option value="Poland">
											    Poland
											  </option>
											  <option value="Portugal">
											    Portugal
											  </option>
											  <option value="Romania">
											    Romania
											  </option>
											  <option value="San Marino">
											    San Marino
											  </option>
											  <option value="Serbia">
											    Serbia
											  </option>
											  <option value="Slovakia">
											    Slovakia
											  </option>
											  <option value="Slovenia">
											    Slovenia
											  </option>
											  <option value="Spain">
											    Spain
											  </option>
											  <option value="Sweden">
											    Sweden
											  </option>
											  <option value="Switzerland">
											    Switzerland
											  </option>
											  <option value="Ukraine">
											    Ukraine
											  </option>
											  <option value="United Kingdom">
											    United Kingdom
											  </option>
											  <option value="Vatican City">
											    Vatican City
											  </option>
											</optgroup>
											<optgroup label="Asia">
											  <option value="?Afghanistan">
											    ?Afghanistan
											  </option>
											  <option value="Bahrain">
											    Bahrain
											  </option>
											  <option value="Bangladesh">
											    Bangladesh
											  </option>
											  <option value="Bhutan">
											    Bhutan
											  </option>
											  <option value="Brunei Darussalam">
											    Brunei Darussalam
											  </option>
											  <option value="Myanmar">
											    Myanmar
											  </option>
											  <option value="Cambodia">
											    Cambodia
											  </option>
											  <option value="China">
											    China
											  </option>
											  <option value="East Timor">
											    East Timor
											  </option>
											  <option value="Hong Kong">
											    Hong Kong
											  </option>
											  <option value="India">
											    India
											  </option>
											  <option value="Indonesia">
											    Indonesia
											  </option>
											  <option value="Iran">
											    Iran
											  </option>
											  <option value="Iraq">
											    Iraq
											  </option>
											  <option value="Israel">
											    Israel
											  </option>
											  <option value="Japan">
											    Japan
											  </option>
											  <option value="Jordan">
											    Jordan
											  </option>
											  <option value="Kazakhstan">
											    Kazakhstan
											  </option>
											  <option value="North Korea">
											    North Korea
											  </option>
											  <option value="South Korea">
											    South Korea
											  </option>
											  <option value="Kuwait">
											    Kuwait
											  </option>
											  <option value="Kyrgyzstan">
											    Kyrgyzstan
											  </option>
											  <option value="Laos">
											    Laos
											  </option>
											  <option value="Lebanon">
											    Lebanon
											  </option>
											  <option value="Malaysia">
											    Malaysia
											  </option>
											  <option value="Maldives">
											    Maldives
											  </option>
											  <option value="Mongolia">
											    Mongolia
											  </option>
											  <option value="Nepal">
											    Nepal
											  </option>
											  <option value="Oman">
											    Oman
											  </option>
											  <option value="Pakistan">
											    Pakistan
											  </option>
											  <option value="Palestine">
											    Palestine
											  </option>
											  <option value="Philippines">
											    Philippines
											  </option>
											  <option value="Qatar">
											    Qatar
											  </option>
											  <option value="Russia">
											    Russia
											  </option>
											  <option value="Saudi Arabia">
											    Saudi Arabia
											  </option>
											  <option value="Singapore">
											    Singapore
											  </option>
											  <option value="Sri Lanka">
											    Sri Lanka
											  </option>
											  <option value="Syria">
											    Syria
											  </option>
											  <option value="Taiwan">
											    Taiwan
											  </option>
											  <option value="Tajikistan">
											    Tajikistan
											  </option>
											  <option value="Thailand">
											    Thailand
											  </option>
											  <option value="Turkey">
											    Turkey
											  </option>
											  <option value="Turkmenistan">
											    Turkmenistan
											  </option>
											  <option value="United Arab Emirates">
											    United Arab Emirates
											  </option>
											  <option value="Uzbekistan">
											    Uzbekistan
											  </option>
											  <option value="Vietnam">
											    Vietnam
											  </option>
											  <option value="Yemen">
											    Yemen
											  </option>
											</optgroup>
											<optgroup label="Oceania">
											  <option value="Australia">
											    Australia
											  </option>
											  <option value="Fiji">
											    Fiji
											  </option>
											  <option value="Kiribati">
											    Kiribati
											  </option>
											  <option value="Marshall Islands">
											    Marshall Islands
											  </option>
											  <option value="Micronesia">
											    Micronesia
											  </option>
											  <option value="Nauru">
											    Nauru
											  </option>
											  <option value="New Zealand">
											    New Zealand
											  </option>
											  <option value="Palau">
											    Palau
											  </option>
											  <option value="Papua New Guinea">
											    Papua New Guinea
											  </option>
											  <option value="Samoa">
											    Samoa
											  </option>
											  <option value="Solomon Islands">
											    Solomon Islands
											  </option>
											  <option value="Tonga">
											    Tonga
											  </option>
											  <option value="Tuvalu">
											    Tuvalu
											  </option>
											  <option value="Vanuatu">
											    Vanuatu
											  </option>
											</optgroup>
											<optgroup label="Africa">
											  <option value="Algeria">
											    Algeria
											  </option>
											  <option value="Angola">
											    Angola
											  </option>
											  <option value="Benin">
											    Benin
											  </option>
											  <option value="Botswana">
											    Botswana
											  </option>
											  <option value="Burkina Faso">
											    Burkina Faso
											  </option>
											  <option value="Burundi">
											    Burundi
											  </option>
											  <option value="Cameroon">
											    Cameroon
											  </option>
											  <option value="Cape Verde">
											    Cape Verde
											  </option>
											  <option value="Central African Republic">
											    Central African Republic
											  </option>
											  <option value="Chad">
											    Chad
											  </option>
											  <option value="Comoros">
											    Comoros
											  </option>
											  <option value="Democratic Republic of the Congo">
											    Democratic Republic of the Congo
											  </option>
											  <option value="Republic of the Congo">
											    Republic of the Congo
											  </option>
											  <option value="Djibouti">
											    Djibouti
											  </option>
											  <option value="Egypt">
											    Egypt
											  </option>
											  <option value="Equatorial Guinea">
											    Equatorial Guinea
											  </option>
											  <option value="Eritrea">
											    Eritrea
											  </option>
											  <option value="Ethiopia">
											    Ethiopia
											  </option>
											  <option value="Gabon">
											    Gabon
											  </option>
											  <option value="Gambia">
											    Gambia
											  </option>
											  <option value="Ghana">
											    Ghana
											  </option>
											  <option value="Gibraltar">
											    Gibraltar
											  </option>
											  <option value="Guinea">
											    Guinea
											  </option>
											  <option value="Guinea&dash;Bissau">
											    Guinea&dash;Bissau
											  </option>
											  <option value="Cote d'Ivoire">
											    Cote d'Ivoire
											  </option>
											  <option value="Kenya">
											    Kenya
											  </option>
											  <option value="Lesotho">
											    Lesotho
											  </option>
											  <option value="Liberia">
											    Liberia
											  </option>
											  <option value="Libya">
											    Libya
											  </option>
											  <option value="Madagascar">
											    Madagascar
											  </option>
											  <option value="Malawi">
											    Malawi
											  </option>
											  <option value="Mali">
											    Mali
											  </option>
											  <option value="Mauritania">
											    Mauritania
											  </option>
											  <option value="Mauritius">
											    Mauritius
											  </option>
											  <option value="Morocco">
											    Morocco
											  </option>
											  <option value="Mozambique">
											    Mozambique
											  </option>
											  <option value="Namibia">
											    Namibia
											  </option>
											  <option value="Niger">
											    Niger
											  </option>
											  <option value="Nigeria">
											    Nigeria
											  </option>
											  <option value="Rwanda">
											    Rwanda
											  </option>
											  <option value="Sao Tome and Principe">
											    Sao Tome and Principe
											  </option>
											  <option value="Senegal">
											    Senegal
											  </option>
											  <option value="Seychelles">
											    Seychelles
											  </option>
											  <option value="Sierra Leone">
											    Sierra Leone
											  </option>
											  <option value="Somalia">
											    Somalia
											  </option>
											  <option value="South Africa">
											    South Africa
											  </option>
											  <option value="Sudan">
											    Sudan
											  </option>
											  <option value="Swaziland">
											    Swaziland
											  </option>
											  <option value="United Republic of Tanzania">
											    United Republic of Tanzania
											  </option>
											  <option value="Togo">
											    Togo
											  </option>
											  <option value="Tunisia">
											    Tunisia
											  </option>
											  <option value="Uganda">
											    Uganda
											  </option>
											  <option value="Zambia">
											    Zambia
											  </option>
											  <option value="Zimbabwe">
											    Zimbabwe
											  </option>
											</optgroup>
										</select>
										<br />
										<font size="-2"><div id="FormLableLeft">Zip<strong>*</strong></div><div id="FormLableCountry">Country<strong>*</strong></div></font>
										</td>
								    	</tr>
									<tr><td>&nbsp;</td></tr>
									<tr>
									     	<td width="155">Dealership Website</td>
										<td width="155"><input name="DealerWebsite" type="text" class="textfield" id="DealerWebsite" size="30" />
					</td>
								    	</tr>
									<tr><td>&nbsp;</td></tr>
									<tr>
									     	<td width="155">Are You Part of a Dealer Group/Franchise?</td>
										<td width="155">
										<select id="Franchise" name="Franchise">
											<option value="Please Select">
											Please Select
											</option>
								<option id="FranchiseYes" value="Yes">
											Yes
											</option>
											<option id="FranchiseNo" value="No">
													No						
											</option>
										</select>
						
					</td>
								    	</tr>
									<tr><td colspan="2"><hr /></td></tr>				
									<tr>
										<td colspan="2"><strong>Main Contact Information</strong>
									<br />
									<font size="-2">Please provide the following details regarding the main contact information</font>			
									</td>
								</tr>
								<tr><td><br /></td></tr>
									<tr>
									     	<td width="155">Main Contact of Dealership:</td>
										<td width="155"><input name="DealerMainContactFirst" type="text" class="textfield" id="DealerMainContactFirst" size="15" />
										<input name="DealerMainContactLast" type="text" class="textfield" id="DealerMainContactLast" size="15" />					
										<br /><font size="-2"><div id="FormLableLeft">First<strong>*</strong></div><div id="FormLableState">Last<strong>*</strong></div></font>				
										</td>
								    	</tr>
									<tr><td>&nbsp;</td></tr>				
									<tr>
									     	<td width="155">Main Contact Cell Phone:</td>
										<td width="155"><input name="DealerCellPhone1" type="text" class="textfield" id="DealerCellPhone1" size="3" maxlength="3" onblur="validateNumericValues(DealerCellPhone1);lengthRestriction(DealerCellPhone1, 3, 3)" />-<input name="DealerCellPhone2" type="text" class="textfield" id="DealerCellPhone2" size="3" maxlength="3" onblur="validateNumericValues(DealerCellPhone2);lengthRestriction(DealerCellPhone2, 3, 3)" />-<input name="DealerCellPhone3" type="text" class="textfield" id="DealerCellPhone3" size="4" maxlength="4" onblur="validateNumericValues(DealerCellPhone3);lengthRestriction(DealerCellPhone3, 4, 4)" />
					</td>
								    	</tr>
									<tr><td>&nbsp;</td></tr>				
									<tr>
									     	<td width="155">Main Contact Office Phone:</td>
										<td width="155">
											<input name="DealerOfficePhone1" type="text" class="textfield" id="DealerOfficePhone1" size="3" maxlength="3" onblur="validateNumericValues(DealerOfficePhone1);lengthRestriction(DealerOfficePhone1, 3, 3)" />
											-<input name="DealerOfficePhone2" type="text" class="textfield" id="DealerOfficePhone" size="3" maxlength="3" onblur="validateNumericValues(DealerOfficePhone2);lengthRestriction(DealerOfficePhone2, 3, 3)" />
											-<input name="DealerOfficePhone3" type="text" class="textfield" id="DealerOfficePhone3" size="4" maxlength="4" />&nbsp;&nbsp;
											<input name="OfficePhoneExt" type="text" class="textfield" id="OfficePhoneExt" size="4" maxlength="4" onblur="validateNumericValues(DealerOfficePhone3);lengthRestriction(DealerOfficePhone3, 4, 4)" />
										<br />
										<div id="FormLabelExt"><font size="-2">Ext</font></div>
					</td>
								    	</tr>
									<tr><td><br /></td></tr>
									<tr>
									     	<td width="155">Main Contact Email Address:</td>
										<td width="155"><input name="DealerEmail" type="text" class="textfield" id="DealerEmail" size="30" onKeyUp="verify2.check()" /><input name="DealerEmail2" type="text" class="textfield" id="DealerEmail2" size="30" onKeyUp="verify2.check()" />
										<br />
											<font size="-2"><div id="FormLableLeft">Enter Email Address<strong>*</strong></div><div id="FormLableEmailRight">Re-Enter Email Address<strong>*</strong></div><br /><div id="email_result">&nbsp;</div><font>
										</td>
								    	</tr>
									<tr><td colspan="2">&nbsp;</td></tr>
									<tr>
					 	<td width="155">Main Contact Position</td>
										<td width="155"><input name="ContactPosition" type="text" class="textfield" id="ContactPosition" size="30" /></td>
								    	</tr>
				
									<tr><td colspan="2"><hr /></td></tr>
				
				
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
										<font size="-2"><div id="FormLableLeft">First<strong>*</strong></div><div id="FormLableMI">MI<strong>*</strong></div><div id="FormLableLast">Last<strong>*</strong></div></font></td>
									</tr>
									<tr><td>&nbsp;</td></tr>
				
									<tr>
									     	<td width="155">Account Payable Email:</td>
										<td width="155">
											<input name="AccountPayableEmail" type="text" class="textfield" id="AccountPayableEmail" size="30" onKeyUp="verify3.check()" /><input name="AccountPayableEmail2" type="text" class="textfield" id="AccountPayableEmail2" size="30" onKeyUp="verify3.check()" />			<br />
											<font size="-2"><div id="FormLableLeft">Enter Email Address<strong>*</strong></div><div id="FormLableEmailRight">Re-Enter Email Address<strong>*</strong></div><br /><div id="Payemail_result">&nbsp;</div><font>
										</td>
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
											-<input name="AccountPayableCell3" type="text" class="textfield" id="AccountPayableCell3" size="3" maxlength="4" onblur="validateNumericValues(AccountPayableCell3);lengthRestriction(AccountPayableCell3, 4, 4)" />
					</td>
								    	</tr>
									<!--PAYMENT INFORMATION -->

									<tr><td colspan="2"><hr /></td></tr>
				


									<!--LEADS -->
									<tr valign="top">
										<td colspan="2">
										<strong>Deliver Leads To</strong>
										<br />
										<font size="-2">
										Please provide the phone number and Email address you want our leads to be sent to.
										</font>
										</td>
									</tr>
									<tr><td>&nbsp;</td></tr>
									<tr>
									     	<td width="155">Phone Number for Leads:</td>
										<td width="155">
											<input name="LeadCell1" type="text" class="textfield" id="LeadCell1" size="3" maxlength="3" onblur="validateNumericValues(LeadCell1);lengthRestriction(LeadCell1, 3, 3)"/>-						
											<input name="LeadCell2" type="text" class="textfield" id="LeadCell2" size="3" maxlength="3" onblur="validateNumericValues(LeadCell2);lengthRestriction(LeadCell2, 3, 3)" />-						
											<input name="LeadCell3" type="text" class="textfield" id="LeadCell" size="3" maxlength="4" onblur="validateNumericValues(LeadCell3);lengthRestriction(LeadCell3, 4, 4)" />
					</td>
								    	</tr>				
									<tr><td><br /></td></tr>
									<tr>
									     	<td width="155">Email Address for Leads (CRM):</td>
										<td width="155"><input name="LeadEmail" type="text" class="textfield" id="LeadEmail" size="30" onKeyUp="verify4.check()" /><input name="LeadEmail2" type="text" class="textfield" id="LeadEmail2" size="30" onKeyUp="verify4.check()" />
										<br />
											<font size="-2"><div id="FormLableLeft">Enter Email Address<strong>*</strong></div><div id="FormLableEmailRight">Re-Enter Email Address<strong>*</strong></div><br /><div id="Leademail_result">&nbsp;</div></font>
										</td>
								    	</tr>
									<tr><td>&nbsp;</td></tr>
								    	
									<!--LEADS -->

									<tr><td colspan="2"><hr /></td></tr>
				
									<!--DATA FEED PROVIDER -->
									<tr valign="top">
										<td colspan="2">
										<strong>Data Feed Provider:</strong>
										<br />
										<font size="-2">
										Please provide information about your dealership's data feed provider. This is the company that takes your used inventory's pictures. 
										<br />					
										Dealer specialties, Vin Solutions, and Auction123 are all examples of data feed providers.
										</font>
										</td>
									</tr>
									<tr>
										<td><br /></td>
									</tr>
									<tr valign="top">
										<td>Datafeed Provider</td>
										<td>
										<select id="DataFeedProvider" name="DataFeedProvider">
										  <option value="" selected="selected">
										    Select a Provider
										  </option>
										  <option value="ADAM">
										    ADAM
										  </option>
										  <option value="AT Grabber">
										    AT Grabber
										  </option>
										  <option value="Auction 123">
										    Auction 123
										  </option>
										  <option value="Auto Exact">
										    Auto Exact
										  </option>
										  <option value="Auto Express">
										    Auto Express
										  </option>
										  <option value="Auto Fusion">
										    Auto Fusion
										  </option>
										  <option value="Auto Nexus">
										    Auto Nexus
										  </option>
										  <option value="1Auto Revo">
										    1Auto Revo
										  </option>
										  <option value="Auto Revolution">
										    Auto Revolution
										  </option>
										  <option value="Auto Uplink">
										    Auto Uplink
										  </option>
										  <option value="Autobase">
										    Autobase
										  </option>
										  <option value="Autoexperts">
										    Autoexperts
										  </option>
										  <option value="Autofunds">
										    Autofunds
										  </option>
										  <option value="Autolahome">
										    Autolahome
										  </option>
										  <option value="Autolot Manager">
										    Autolot Manager
										  </option>
										  <option value="Automanager">
										    Automanager
										  </option>
										  <option value="AutoMate">
										    AutoMate
										  </option>
										  <option value="Autonation">
										    Autonation
										  </option>
										  <option value="Autosoft">
										    Autosoft
										  </option>
										  <option value="Autotrader.ca">
										    Autotrader.ca
										  </option>
										  <option value="Autoxloo.com">
										    Autoxloo.com
										  </option>
										  <option value="Bargain News">
										    Bargain News
										  </option>
										  <option value="Big Voice">
										    Big Voice
										  </option>
										  <option value="Car Spot">
										    Car Spot
										  </option>
										  <option value="Carbase">
										    Carbase
										  </option>
										  <option value="CarThink">
										    CarThink
										  </option>
										  <option value="CarWeek">
										    CarWeek
										  </option>
										  <option value="CDM Data">
										    CDM Data
										  </option>
										  <option value="Chroma Cars">
										    Chroma Cars
										  </option>
										  <option value="Cobalt">
										    Cobalt
										  </option>
										  <option value="CT Wizard">
										    CT Wizard
										  </option>
										  <option value="Data One Software">
										    Data One Software
										  </option>
										  <option value="Dealer 123">
										    Dealer 123
										  </option>
										  <option value="Dealer Car Search">
										    Dealer Car Search
										  </option>
										  <option value="Dealer Data">
										    Dealer Data
										  </option>
										  <option value="Dealer FTP">
										    Dealer FTP
										  </option>
										  <option value="Dealer Fusion">
										    Dealer Fusion
										  </option>
										  <option value="Dealer Impact">
										    Dealer Impact
										  </option>
										  <option value="Dealer Motive">
										    Dealer Motive
										  </option>
										  <option value="Dealer Solutions">
										    Dealer Solutions
										  </option>
										  <option value="Dealer Specialties">
										    Dealer Specialties
										  </option>
										  <option value="Dealer.com">
										    Dealer.com
										  </option>
										  <option value="Dealerskins">
										    Dealerskins
										  </option>
										  <option value="Dealersource">
										    Dealersource
										  </option>
										  <option value="Devventure / Auto Sweet of Texas">
										    Devventure / Auto Sweet of Texas
										  </option>
										  <option value="Diamond Lot">
										    Diamond Lot
										  </option>
										  <option value="DMI">
										    DMI
										  </option>
										  <option value="eBizAutos">
										    eBizAutos
										  </option>
										  <option value="ecarlist">
										    ecarlist
										  </option>
										  <option value="EDS">
										    EDS
										  </option>
										  <option value="ESP Data">
										    ESP Data
										  </option>
										  <option value="Finance Express">
										    Finance Express
										  </option>
										  <option value="First Look">
										    First Look
										  </option>
										  <option value="Frazer ">
										    Frazer
										  </option>
										  <option value="Friday Systems">
										    Friday Systems
										  </option>
										  <option value="Genesys">
										    Genesys
										  </option>
										  <option value="GST Toyota">
										    GST Toyota
										  </option>
										  <option value="GW Marketing - Your Car Lot">
										    GW Marketing - Your Car Lot
										  </option>
										  <option value="Homenet">
										    Homenet
										  </option>
										  <option value="iDealer">
										    iDealer
										  </option>
										  <option value="iMagicLabs">
										    iMagicLabs
										  </option>
										  <option value="InfinitiNet">
										    InfinitiNet
										  </option>
										  <option value="IOCOM">
										    IOCOM
										  </option>
										  <option value="Kelly Karpower">
										    Kelly Karpower
										  </option>
										  <option value="Lightyear">
										    Lightyear
										  </option>
										  <option value="Liquid Motors">
										    Liquid Motors
										  </option>
										  <option value="Lithia">
										    Lithia
										  </option>
										  <option value="Lithia.com">
										    Lithia.com
										  </option>
										  <option value="Lookatusedcars">
										    Lookatusedcars
										  </option>
										  <option value="Lot Boys">
										    Lot Boys
										  </option>
										  <option value="Manual Entry">
										    Manual Entry
										  </option>
										  <option value="Netlook">
										    Netlook
										  </option>
										  <option value="Nexteppe">
										    Nexteppe
										  </option>
										  <option value="Other 3rd Party">
										    Other 3rd Party
										  </option>
										  <option value="Other DMS">
										    Other DMS
										  </option>
										  <option value="PBS">
										    PBS
										  </option>
										  <option value="Promax">
										    Promax
										  </option>
										  <option value="Proquotes">
										    Proquotes
										  </option>
										  <option value="Reynolds and Reynolds">
										    Reynolds and Reynolds
										  </option>
										  <option value="Reynolds Web Solutions">
										    Reynolds Web Solutions
										  </option>
										  <option value="RyanTech">
										    RyanTech
										  </option>
										  <option value="SelectQu">
										    SelectQu
										  </option>
										  <option value="Smart Web Concepts">
										    Smart Web Concepts
										  </option>
										  <option value="Teton Solutions">
										    Teton Solutions
										  </option>
										  <option value="Trans World Data">
										    Trans World Data
										  </option>
										  <option value="Traver Technologies">
										    Traver Technologies
										  </option>
										  <option value="UCS Datacaster">
										    UCS Datacaster
										  </option>
										  <option value="UCS FEED">
										    UCS FEED
										  </option>
										  <option value="Unity Media Works">
										    Unity Media Works
										  </option>
										  <option value="Vehicle Command - DMI">
										    Vehicle Command - DMI
										  </option>
										  <option value="Vehicle Details">
										    Vehicle Details
										  </option>
										  <option value="VIN Tracker">
										    VIN Tracker
										  </option>
										  <option value="VINsource">
										    VINsource
										  </option>
										  <option value="VinStickers/ESP Data">
										    VinStickers/ESP Data
										  </option>
										  <option value="Walk The Lot">
										    Walk The Lot
										  </option>
										  <option value="Webentory">
										    Webentory
										  </option>
										  <option value="XI Group">
										    XI Group
										  </option>
										  <option value="Zeus">
										    Zeus
										  </option>
										</select>
										</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr valign="top">
										<td>OTHER (Not Listed)</td>
										<td><input name="OtherDataFeedProvider" type="text" class="textfield" id="OtherDataFeedProvider" size="30" maxlength="30" />
										<br />
										<font size="-2"><em>If you selected OTHER from the drop down list, please specify your inventory provider here.</em></font>
									</tr>
									<tr><td><br /></td></tr>
								    	<tr valign="top">
										<td>Data Feed Main Contact</td>
										<td><input name="DataFeedMainContactFirst" type="text" class="textfield" id="DataFeedMainContactFirst" size="15" maxlength="15" /><input name="DataFeedMainContactLast" type="text" class="textfield" id="DataFeedMainContactLast" size="15" maxlength="15" />
										<br />					
										<font size="-2">
										<font size="-2"><div id="FormLableLeft">First<strong>*</strong></div><div id="FormLableState">Last<strong>*</strong></div><br /><font>					
										</font>
										</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr valign="top">
										<td>Data Feed Contact Phone #</td>
										<td>
										<input name="DataFeedMainPhone1" type="text" class="textfield" id="DataFeedMainPhone1" size="3" maxlength="3" />-<input name="DataFeedMainPhone2" type="text" class="textfield" id="DataFeedMainPhone2" size="3" maxlength="3" />-<input name="DataFeedMainPhone3" type="text" class="textfield" id="DataFeedMainPhone3" size="4" maxlength="4" />
										</td>
										</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr valign="top">
										<td>Data Feed Contact Email</td>
										<td><input name="DataFeedMainEmail" type="text" class="textfield" id="DataFeedMainEmail" size="30" maxlength="30" /></td>
									</tr>
									<tr><td><br /></td></tr>
									<tr valign="top">
										<td>Used Cars In Stock</td>
										<td><input name="UsedCarsInStock" type="text" class="textfield" id="UsedCarsInStock" size="60"  /></td>
									</tr>



									<!--DATA FEED PROVIDER -->

									<tr><td colspan="2"><hr /></td></tr>

									<!--CLASSIFIED RIDE INFO -->
									<tr valign="top">
										<td colspan="2">
										<strong>Classified Ride Information</strong>
										<br />
										<font size="-2">
										Please choose the applicable answer. If you have been working with a Classified Ride Representative, please provide their name in the space provided.
										</font>
										</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr>
										<td>
										Please Select One
										</td>
										<td>
										<input type="radio" name="Rep" id="RepYes" value="Yes">I have currently been working with a representative<br>
										<input type="radio" name="Rep" id="RepNo" value="No">I do not have a representative<br>
										</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr>
										<td>
										Name of Representative
										</td>
										<td>
											<div class="dropdown">
													<input type="text" id="search_string" name="search_string" class="autocomplete">
										<br /><font size="-2">Start Typing your Rep's First Name and then Select Name from list.</font>
					  
											</div>
											<div class="dropdown">
												<ul class="result"></ul>
											</div>
										</td>
									</tr>
									<tr><td><br /></td></tr>
									<!--CLASSIFIED RIDE INFO -->
				
									<tr><td colspan="2"><hr /></td></tr>
				
									<!--PACKAGES -->
									<tr valign="top">
										<td colspan="2">
										<strong>Classified Ride Packages </strong>
										</td>
									</tr>
									<tr><td colspan="2"><br /></td></tr>
									<tr valign="top">
										<td>Program</td>
										<td>
										<input type="radio" name="Program" value="399" id="two">
										<label for="399">Inventory Listed on Classified Ride for $399 per month</label>  
										<br />
										<input type="radio" name="Program" value="798" id="one">
											  <label for="798">Preferred Package with entire Inventory Listing and Competition Killer Package for $798 per month
										<br />

									</td>
									</tr>
									<tr><td><br /></td></tr>
				
					
									<!--PACKAGES -->

									<tr><td colspan="2"><hr /></td></tr>
				
									<!--FEATURES -->
									<tr valign="top">
										<td colspan="2">
										<strong>Classified Ride Add-Ons </strong>
										<br />
										<font size="-2">
										Please Select the following additional programs you would like for your dealership.
										</font>
										</td>
									</tr>
									<tr><td colspan="2"><br /></td></tr>
									<tr valign="top">
										<td>Dealership Directory</td>
										<td>
										<input type="checkbox" name="directory" value="directoryON" id="directory">
										<label for="directory"><strong>Dealership Directory for $99 per month</strong></label>  
										<br /><Br />
										<em>Get your dealership listed on the dealership directory where thousands of potential customers can view your dealership, dealership contact information and website to inquire about your inventory!</em>

									</td>
									</tr>
									<tr><td><br /></td></tr>
					
									<tr valign="top">
										<td>Facebbok: 25,000<br /> "LIKES" Fan Page</td>
										<td>
										<input type="checkbox" name="facebook" value="facebookON" id="facebook">
											  <label for="facebook"><strong>Facebook: 25,000 Likes Fan Page for $1490 per month</strong></label>
										<br /><br />
										<em>You may be wondering, "How is Facebook Likes Going to Help Me and My Dealership?" Good question! Here's why!
										<br /><br />
										When you generate 25,000 Likes per month for your dealership fan page, you not only attract those viewers, but also their friends of friends. Plus, your dealership grows in popularity with the recognition of being "liked" by so many real people. This not only helps you for SEO and reputation management, but google searches plus exposure from locals in your area!</em>

									</td>
									</tr>
									<tr><td><br /></td></tr>
					
									<tr valign="top">
										<td> SMS: Trade-In Leads</td>
										<td>
										<input type="checkbox" name="SMS" value="SMSON" id="SMS">
											  <label for="SMS"><strong>SMS: Trade-In Leads for $990 per month</strong></label>
										<br /><br />
										<em>SMS Text Messaging Leads can boost a dealership's lead count by 68%! These priceless leads are trade-in leads from customers who are looking to trade-in their vehicle and get a new one! Don't worry, we will help train your salesmen on these leads, just ask because once they start, they dont' stop!</em>

									</td>
									</tr>
									<tr><td><br /></td></tr>
					
									<tr valign="top">
										<td> You Tube: Inventory Videos</td>
										<td>
										<input type="checkbox" name="YouTube" value="YouTubeON" id="YouTube">
											  <label for="YouTube"><strong>You Tube: Inventory Videos for $199 per month</strong></label>
										<br /><br />
										<em>With You Tube videos, not only do you get the exposure from You Tube videos that we generate for you, but also with increased SEO from major search engines. Approximately 79 billion people watch videos on a monthly basis. By listing your pre-owned inventory and the video will show all the pictures you have available for the vehicle. With this service you have the benefit of not only instant videos, but increased search engine optimization on Google and Bing. </em>

									</td>
									</tr>
									<tr><td><br /></td></tr>
					
									<tr valign="top">
										<td>CaBID: Bid-Offer <Br />Negotiation Leads</td>
										<td>
										<input type="checkbox" name="CaBID" value="CaBIDON" id="CaBID">
											  <label for="CaBID"> <strong>CaBiD Leads for $399 per month</strong></label>
										<br /><br />
										<em>A CaBiD is the first ever designed e-mail lead generator that allows customers to place a "CaBiD" on your dealership's specific inventory. Think of a CaBid as a pre-negotation stage for you and the customer to interact and start negotiating about the price of a vehicle without the customer feeling the obligation of placing a real time bid like on the eBay website.</em>

									</td>
									</tr>
				
									<tr><td><br /></td></tr>					

									<!--FEATURES -->
									<tr><td colspan="2"><hr /></td></tr>
								
									<!--DEALER AUTHORIZATION -->
									<tr valign="top">
										<td colspan="2">
										<strong>Dealership Authorization of Classified Ride Listing Services</strong>
										<br />
										<font size="-2">
										Dealership Signatures
										</font>
										</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr valign="top">
										<td>Authorization of Services</td> 
										<td><input type="checkbox" name="Authorization" value="check" />I authorize ClassifiedRide.com's services for my dealership and am an authorized agent to do so. In addition, I am in compliance with all the terms and conditions and accept them.</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr valign="top">
										<td>Name of Authorized <br />Dealership Agent</td>
										<td>
											<input type="text" name="AgentFirstName" id="AgentFirstName" size="15" class="textfield" />
											<input type="text" name="AgentLastName" id="AgentLastName" size="15" class="textfield" />
											<br /><font size="-2"><div id="FormLableLeft">First<strong>*</strong></div><div id="FormLableState">Last<strong>*</strong></div></font>
											</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr valign="top">
										<td>Digital Signature</td>
										<td>
											<input type="text" name="Signature" id="Signature" size="3" maxlength="3" class="textfield" />
											<br />
											<font size="-2">
											Please Enter Your Initials</font>
											</td>
									</tr>
									<tr><td><br /></td></tr>
									<tr valign="top">
										<td>Date</td>
										<td>
											<input type='text' name='date' id='date' class='textfield' onclick='fPopCalendar("date")'/>
											<br />
											</td>
									</tr>
									<tr><td><br /></td></tr>								
									<tr><td colspan="2"><hr /></td></tr>				
									<tr><td><br /></td></tr>				
									<tr>
										<td colspan="2">			
										<font size="-2"><em>Classified Ride's services are month to month with no contractual obligation unless agreed and specified by both parties. At any time, client can withdraw services, provided that 30 (thirty) days notice is received. Notice is required to be provided via phone, email, or fax. Payments are due on the date specified on the billed invoice. Failure to pay for service on specified due dates may halt service until payment is received. Service will resume as soon as payment or valid confirmation that payment is via transit is received. Classified Ride data feeds to third party exports; if this is a problem, please inform your specified Classified Ride representative at time of registration. If you have any further questions, please refer to our website at www.classifiedride.com or contact us during our normal business hours of 9:00-5:00 p.m. Monday - Friday. This form serves as a promissory registration; once completed and signed, payment must be tendered and services must be rendered for time specified. For more information, please refer to our Terms and Conditions at www.classifiedride.com for more information regarding any questions of service you may have. We greatly appreciate your business and look forward to a long business relationship.</em></font></td>
									</tr>
									<tr><td><br /></td></tr>
									<!--DEALER AUTHORIZATION -->				
									
									<!--SUBMIT -->				
									<tr>
									      	<td colspan="2" width="155" align="center"><input name="Submit" type="submit" value="Submit Dealer Registration" class="fsSubmitButton" /></td>
									</tr>	
									<!--SUBMIT -->	
				
									<tr>
										<td width="155">&nbsp;</td>
										<td width="155">&nbsp;</td>
								    	</tr>
								</table>
					</table>
				</form>
			</div>
		</td>
	</tr>
</table>
