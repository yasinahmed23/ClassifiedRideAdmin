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
										<td colspan="2">
										<strong>Dealership Information</strong>
										<br />
										<font size="-2">
										Please provide the following information about your dealership.
										</font>
										</td>
									</tr>
									
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
									
									<!--SUBMIT -->				
									<tr>
									      	<td colspan="2" width="155" align="center"><input name="Submit" type="submit" value="Make Payment" class="fsSubmitButton" /></td>
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
