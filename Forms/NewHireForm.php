<table width="700" cellpadding="10" cellspacing="0" border="0" class="table" align="center">
	<tr>
		<td>
		<div id="RegistrationForm">
			<form id="RegisterForm" name="RegisterForm" method="post" action="/includes/New_Hire_process.php" onsubmit="return validateForm()">
			<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr valign="top">
			    		<td>
						<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
					    		<tr valign="top">
								<td colspan="2" ><font size="+1"><strong>New-Hire Employment Form</strong></font>
						    		<br />
						    		<font size="-2">We are excited that you will becoming part of the ClassifiedRide Training team! <br />Please complete all fields so that you may gain access to the site.</font>
						    		<hr />
						    		</td>
							</tr>
						</table>
						<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr valign="top">
								<td width="150">Login Info:</td>
								<td>
								<input name="EmplUserName" type="text" class="textfield" id="EmplUserName" size="20" maxlength="20" />
								<br />
								<div id="login_length"></div>
								<font size="-2">Username*<font>
								<br />
								<input name="EmplPassword" type="password" class="textfield" id="EmplPassword" size="20" maxlength="20" onKeyUp="verify.check()" /><input name="EmplPassword2" type="password" class="textfield" id="EmplPassword2" size="20" maxlength="20" onKeyUp="verify.check()" />
								<br />
								<div id="FormLableLeft"><font size="-2">Password*</div><div id="FormLableRight">Re-Enter Password*</div><br /><div id="password_result">&nbsp;</div><font>
								<br />
								</td>
							</tr>
							<tr valign="top">
								<td width="150">&nbsp;</td>
								<td><input name="EmplEmail" type="text" class="textfield" id="EmplEmail" size="30" onKeyUp="verify2.check()" /><input name="EmplEmail2" type="text" class="textfield" id="EmplEmail2" size="30" onKeyUp="verify2.check()" /></td>
							</tr>
							<tr valign="top"><td width="150">&nbsp;</td><td><font size="-2"><div id="FormLableLeft">Enter Email Address*</div><div id="FormLableEmailRight">Re-Enter Email Address*</div><br /><div id="email_result">&nbsp;</div><font></td></tr>
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
								<td width="150">Name:</td>
								<td><input name="EmplFirstName" type="text" class="textfield" id="EmplFirstName" size="15" maxlength="15" /><input name="EmplMiddleInitial" type="text" class="textfield" id="EmplMiddleInitial" size="1" maxlength="1" /><input name="EmplLastName" type="text" class="textfield" id="EmplLastName" size="15" maxlength="15" />
								<br />
								<font size="-2"><div id="FormLableLeft">First*</div><div id="FormLableMI">MI*</div><div id="FormLableLast">Last*</div></font></td>
							</tr>
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
								<td width="150">Address:</td>
								<td>
									<input name="EmplStreet1" type="text" class="textfield" id="EmplStreet1" size="30" />
									<input name="EmplStreet2" type="text" class="textfield" id="EmplStreet2" size="20" />
									<br />
									<font size="-2"><div id="FormLableLeft">Street Address*</div><div id="FormLableStreetRight">Street Address Line 2</div></font></td>
							</tr>
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
								<td width="150">&nbsp;</td>
								<td>

								<input name="EmplCity" type="text" class="textfield" id="EmplCity" size="15" maxlength="15" />

								<input name="EmplState" type="text" class="textfield" id="EmplState" size="2" maxlength="2" /><br />
								<div id="FormLableLeft"><font size="-2">City*</div><div id="FormLableState">State*</div></font><br /></td>
							</tr>
							<tr valign="top">
								<td width="150">&nbsp;</td>
								<td>
								<input name="EmplZip" type="text" class="textfield" id="EmplZip" size="5" maxlength="5" onblur="validateNumericValues(EmplZip);lengthRestriction(EmplZip, 5, 5)"/>

								<select id="EmplCountry" name="EmplCountry" class="textfield">

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

									  <option value="﻿Afghanistan">

									    ﻿Afghanistan

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

								<br /><font size="-2"><div id="FormLableLeft">Zip*</div><div id="FormLableCountry">Country*</div></font></td>
							</tr>

							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
								<td width="150">Cell Phone:</td>
								<td><input name="EmplCellPhone1" type="text" class="textfield" id="EmplCellPhone1" size="3" maxlength="3" onblur="validateNumericValues(EmplCellPhone1);lengthRestriction(EmplCellPhone1, 3, 3)" /><input name="EmplCellPhone2" type="text" class="textfield" id="EmplCellPhone2" size="3" maxlength="3" onblur="validateNumericValues(EmplCellPhone2);lengthRestriction(EmplCellPhone2, 3, 3)"  /><input name="EmplCellPhone3" type="text" class="textfield" id="EmplCellPhone3" size="4" maxlength="4" onblur="validateNumericValues(EmplCellPhone3);lengthRestriction(EmplCellPhone3, 4, 4)"  />
								</td>
							</tr>
							<tr valign="top">
								<td width="150">Home Phone:</td>
								<td><input name="EmplHome1" type="text" class="textfield" id="EmplHome1" size="3" maxlength="3" onblur="validateNumericValues(EmplHome1);lengthRestriction(EmplHome1, 3, 3)"  /><input name="EmplHome2" type="text" class="textfield" id="EmplHome2" size="3" maxlength="3" onblur="validateNumericValues(EmplHome2);lengthRestriction(EmplHome2, 3, 3)" /><input name="EmplHome3" type="text" class="textfield" id="EmplHome3" size="4" maxlength="4" onblur="validateNumericValues(EmplHome3);lengthRestriction(EmplHome3, 4, 4)" /></td>
							</tr>
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
									     <td width="150">Hired / Referred By:</td>
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
							<tr valign="top"><td colspan="2"><hr /></td></tr>
							<!--PAYMENT INFORMATION -->
							<tr valign="top">
								<td colspan="2">
								<strong>Payment Information</strong>
								<br />
								<font size="-1">
								Please provide the necessary information for iautolead to provide you with compensation for sales rendered.</font></td>
							</tr>
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
						      	<td width="150">Name:</td>		
								<td><input name="EmplPayFirstName" type="text" class="textfield" id="EmplPayFirstName" size="15" maxlength="15" /><input name="EmplPayMiddleInitial" type="text" class="textfield" id="EmplPayMiddleInitial" size="1" maxlength="1" /><input name="EmplPayLastName" type="text" class="textfield" id="EmplPayLastName" size="15" maxlength="15" />

								<br />
								<font size="-2"><div id="FormLableLeft">First*</div><div id="FormLableMI">MI</div><div id="FormLableLast">Last*<div></font></td>
							</tr>
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
						      	<td width="150">Business Name:</td>		
								<td><input name="BusPayName" type="text" class="textfield" id="BusPayName" size="30" maxlength="30" /><br /><font size="-2">If you will be having iautolead pay you as a business, <br />please enter the name of your business which will be reflected on your commission check.</font></td>
							</tr>
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
		
							<tr valign="top">
								<td width="150"> Address:</td>
								<td><input name="EmplPayStreet1" type="text" class="textfield" id="EmplPayStreet1" size="30" /><input name="EmplPayStreet2" type="text" class="textfield" id="EmplPayStreet2" size="30" /><br /><font size="-2"><div id="FormLableLeft">Stret Address*</div><div id="FormLableStreetRight">Street Address Line 2</div></font></td>
						    </tr>
		
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
								<td width="150">&nbsp;</td>
								<td>
								<input name="EmplPayCity" type="text" class="textfield" id="EmplPayCity" size="15" maxlength="15" />
								<input name="EmplPayState" type="text" class="textfield" id="EmplPayState" size="2" maxlength="2" /><br /><font size="-2"><div id="FormLableLeft">City*</div><div id="FormLableState">State/ Province /Region*</div></font>
								<br /></td>
						    </tr>
							<tr valign="top">
							     <td width="150">&nbsp;</td>
								<td>
								<input name="EmplPayZip" type="text" class="textfield" id="EmplPayZip" size="5" maxlength="5" />
								<select id="EmplPayCountry" name="EmplPayCountry" class="textfield">

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

									  <option value="﻿Afghanistan">

									    ﻿Afghanistan

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
								<font size="-2"><div id="FormLableLeft">Zip*</div><div id="FormLableCountry">Country*</div></font>
								</td>
						    	</tr>
							<tr><td colspan="2">&nbsp;</td></tr>
							<tr valign="top">
								<td width="150">Email:</td>
								<td><input name="EmplPayEmail" type="text" class="textfield" id="EmplPayEmail" size="30" onKeyUp="verify3.check()" /><input name="EmplPayEmail2" type="text" class="textfield" id="EmplPayEmail2" size="30" onKeyUp="verify3.check()" /></td>
						    	</tr>
							<tr valign="top"><td width="150">&nbsp;</td><td><font size="-2"><div id="FormLableLeft">Enter Email Address*</div><div id="FormLableEmailRight">Re-Enter Email Address*</div><br /><div id="Payemail_result">&nbsp;</div><font></td></tr>
							<tr valign="top"><td colspan="2">&nbsp;</td></tr>
						    	<tr valign="top">
					    			<td width="150">Phone:</td>
								<td>
									<input name="EmplPayCell1" type="text" class="textfield" id="EmplPayCell1" size="3" maxlength="3" onblur="validateNumericValues(EmplPayCell1);lengthRestriction(EmplPayCell1, 3, 3)" />
									<input name="EmplPayCell2" type="text" class="textfield" id="EmplPayCell2" size="3" maxlength="3"onblur="validateNumericValues(EmplPayCell2);lengthRestriction(EmplPayCell2, 3, 3)"/>
									<input name="EmplPayCell3" type="text" class="textfield" id="EmplPayCell3" size="3" maxlength="4" onblur="validateNumericValues(EmplPayCell3);lengthRestriction(EmplPayCell3, 4, 4)" /></td>
						   	 </tr>
							<tr valign="top">
								<td align="center" colspan="2">
									<hr />
									<input name="Submit" type="submit" value="Submit New Hire" id="SubmitNewHire" class="fsSubmitButton" />
								</td>
							</tr>
				
						</table>
					</td>
				</tr>
			</table>
			<h3 id="results"></h3>
			</form>
		</div>
	</td>
</tr>
</table>
