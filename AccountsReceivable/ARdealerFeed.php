<center><font size="+2"><strong><?php echo "Dealer Search Results"?></strong></font></center>
		<table cellpadding="2" cellspacing="0" border="0" align="center" class="table" width="100%">
			<tr valign="top">
				<td>
					<table cellpadding="2" cellspacing="0" border="0" align="center" width="900">
						<tr>
							<td align="center">&nbsp;</td>		
							<td align="center" width="100"><strong>Dealership</strong></td>				
							<td align="center" width="90"><strong>Contact</strong></td>	
							<td align="center" width="150"><strong>Billing Address</strong></td>
							<td align="center" width="110"><strong>Phone</strong></td>		
							<td align="center" width="100"><strong>Email</td>
							<td align="center" width="90"><strong>Rep</td>
							<td align="center" width="20"><strong>Plan</td>
							<td align="center" width="70"><strong>Mthly Pmt</td>
							<td align="center" width="20"><strong>Date Due </td>
							<td align="center" width="20"><strong>Last Payment</td>
							<td align="center" width="150"><strong>Notes</td>
						</tr>
						<!--Disply data from database into a table -->
						<tr valign='top'>
							<td colspan='12' align='center'><hr /></td>
						</tr>
						<tr>
							<td align="center"><?php echo $numDealersDealers;?></td>		
							<td align="center"><?php echo $DealerName;?></td>
							<td align="center"><?php echo $Contact;?></td>		
							<td align="center"><?php echo $DealerAddress;?></td>
							<td align="center"><?php echo $AccountPayableCell;?></td>
							<td align="center"><?php echo "<p><a href='mailto:$AccountPayableEmail'>" . $AccountPayableEmail . "</a></p>";?></td>
							<td align="center">
								<?php 
									//Get Dealer Rep's Email
									$GetRepsEmail = mysql_query("
										SELECT EmplEmail 	
										FROM employees 
										WHERE employee ='".$RepName."' ");

									while ($row = mysql_fetch_array($GetRepsEmail)) {
										$EmplEmail = $row['EmplEmail'];
										}		
									echo "<p><a href='mailto:$EmplEmail'>" . $RepName . "</a></p>";
		
								?>
							</td>
							<td align="center"><?php echo "$" . $Program;?></td>
							<td align="center"><?php echo "$" . number_format($MthlyPmt, 2);?></td>
							<td align="center"><?php 
										if ($StartDate==null) {
											echo "<font color='red'>Please Set Below</font>";
										}
										else {
											$start  = strpos($StartDate, '/');
											$end    = strpos($StartDate, '/', $start + 1);
											$length = $end - $start;
											$DateDue = substr($StartDate, $start + 1, $length - 1);
											echo $DateDue;
										}
										?>
								
							</td>
							<td align="center"><font size="-2">No Payments made</font></td>
							<td align="center"><?php echo $Notes;?></td>
						</tr>					
					</table>

				</td>
			</tr>
		</table>
		<br />
		<table width="400" cellpadding="0" cellspacing="0" border="0" align="center">
			<tr valign="top">
				<?php if ($StartDate == "" || $StartDate == null) {
					?>
					<td>
					<form id="SetStartDate" name="SetStartDate" method="post" action="/AccountsReceivable/SetStartDate.php" onsubmit="return validateForm()">

						<input type='text' name='date' id='date' class='textfield' onclick='fPopCalendar("date")'/>
						<input type='hidden' name='DealerName' id='DealerName' class='textfield' value='<?php echo $DealerName; ?>' />
						<input type='submit' name='submit' id='submit' class='Button' value='Set Start Date' />
					</form>
					</td>
					<td>&nbsp;</td>
				<?php
			
				}
				
				else {
					echo "<td width='300' align='center'><p><em>Start Date was set to " . $StartDate . "</em></p></td><td>&nbsp;</td>";				
				}
				?>
				<td>

				<form id="AddNote" name="AddNote" method="post" action="/AccountsReceivable/AddNote.php"  onsubmit="return validateForm2()">
					<input type="text" name="Notes" id="Notes" class="textfield" size="30" />
						<input type="hidden" name="DealerName" id="DealerName" class="textfield" value="<?php echo $DealerName; ?>" />
					<input type="submit" name="submit" id="submit" class="Button" value="UPDATE NOTE" />
				</form>
				</td>
			</tr>
		</table>

		<table>
			<tr valign="top">

				<td>
					<table width="350" cellpadding="5" cellspacing="0" border="0" class="table">	
						<tr>
							<td  align="center">
							<strong>Email Leads</strong>
							</td>
							<td  align="center">
							On
							</td>
							<td align="center">
				&nbsp;														
							</td>
						</tr>

						<tr>
							<td  align="center">
							<strong>SMS Blast</strong> ($990)
							</td>
							<td  align="center">
							<?php
							if ($SMS=="" || $SMS=="SMSDeclined") {
								echo "Off";
							}
							else if ($SMS=="SMSON") {
							echo "On";
							}
							?>
							</td>
							<td align="center">
							<form id="SMS" name="SMS" method="post" action="/AccountsReceivable/UpdateSMS.php" onSubmit="if(!confirm('Are you sure that you want change SMS?')){return false;}">
								<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
								<?php
								if ($SMS=="" || $SMS=="SMSDeclined") {
									echo "<input type='submit' class='Button' name='SMS' id='SMS' value='Turn On'>";
								}
								else if ($SMS=="SMSON") {
								echo "<input type='submit' class='Button' name='SMS' id='SMS' value='Turn Off'>";
								}
							?>
							</form>
							</td>
						</tr>

						<tr>
							<td align="center">
							<strong>CaBID</strong> ($399)
							</td>
							<td  align="center">
							<?php
							if ($CaBID=="" ||$CaBID=="CaBIDDeclined") {
								echo "Off";
							}
							else {
							echo "On";
							}
							?>
							</td>
							<td align="center">
							<form id="CaBID" name="CaBID" method="post" action="/AccountsReceivable/UpdateCabid.php" onSubmit="if(!confirm('Are you sure that you want change CaBID?')){return false;}">
								<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
								<?php
								if ($CaBID=="CaBIDDeclined" || $CaBID=="") {
									echo "<input type='submit' class='Button' name='CaBID' id='CaBID' value='Turn On'>";
								}
								else {
								echo "<input type='submit' class='Button' name='CaBID' id='CaBID' value='Turn Off'>";
								}
								?>
							</form>
							</td>
						</tr>

						<tr>
							<td  align="center">
							<strong>YouTube</strong>  ($199)
							</td>
							<td  align="center">
							<?php
							if ($YouTube=="YouTubeON") {			
								echo "On";
							}
							else {
								echo "Off";
							}
							?>
							</td>
							<td align="center">
							<form id="YouTube" name="YouTube" method="post" action="/AccountsReceivable/UpdateYouTube.php" onSubmit="if(!confirm('Are you sure that you want change YouTube?')){return false;}">
								<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
								<?php
								if ($YouTube=="" || $YouTube=="YouTubeDeclined") {
									echo "<input type='submit' class='Button' name='YouTube' id='YouTube' value='Turn On'>";
								}
								else {
								echo "<input type='submit' class='Button' name='YouTube' id='YouTube' value='Turn Off'>";
								}
								?>
							</form>
							</td>
						</tr>

						<tr>
							<td  align="center">
							<strong>FB 25,000 "LIKES"</strong> ($1490)
							</td>
							<td align="center">
							<?php
							if ($facebook=="facebookON") {			
								echo "On";
							}
							else if ($facebook==""||$facebook=="FacebookDeclined") {
								echo "Off";
							}
							?>
							</td>
							<td align="center">
							<form id="facebook" name="facebook" method="post" action="/AccountsReceivable/UpdateFacebook.php" onSubmit="if(!confirm('Are you sure that you want change Facebook?')){return false;}">
								<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
								<?php
								if ($facebook=="" ||$facebook=="FacebookDeclined") {
									echo "<input type='submit' class='Button' name='facebook' id='facebook' value='Turn On'>";
								}
								else {
								echo "<input type='submit' class='Button' name='facebook' id='facebook' value='Turn Off'>";
								}
								?>
							</form>
							</td>
						</tr>

						<tr>
							<td  align="center">
							<strong>Dealer Directory</strong> ($99)
							</td>
							<td align="center"">
							<?php
							if ($directory=="directoryON") {			
								echo "On";
							}
							else if ($directory=="" || $directory=="DirectoryDeclined") {
								echo "Off";
							}
							?>
							</td>
							<td align="center">
							<form id="directory" name="directory" method="post" action="/AccountsReceivable/Updatedirectory.php" onSubmit="if(!confirm('Are you sure that you want change Dealer Directory?')){return false;}">
								<input type="hidden" name="DealerName" id="DealerName" value="<?php echo $DealerName; ?>" />
								<?php
								if ($directory=="DirectoryDeclined"||$directory=="") {
									echo "<input type='submit' class='Button' name='directory' id='directory' value='Turn On'>";
								}
								else {
									echo "<input type='submit' class='Button' name='directory' id='directory' value='Turn Off'>";
								}
								?>
							</form>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table width="480" cellpadding="0" cellspacing="0" border="0">
						<tr valign="top">		
							<td width="50">&nbsp;</td>
							<td>
								<table align="center">
									<tr valign="top">
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<strong>Email Leads</strong>	
													<!--RETURN SCRIPT FOR EMAIL LEADS HERE -->
													<p><font size="-2">(This will come from Tommy)<font><p>									</td>
												</tr>
											</table>
										</td>
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<strong>SMS Blast</strong>
													<!--RETURN SCRIPT FOR SMS BLAST HERE -->
													<p><font size="-2">(This will come from Josh & Armando)<font><p>									
													</td>
												</tr>
											</table>
										</td>
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<strong>Dealer Directory</strong>
													<!--RETURN SCRIPT FOR DEALER DIRECTORY HERE -->
													<p><font size="-2">(This will come from Tommy)<font><p>
											
													</td>
												</tr>
											</table>
										</td>
						
									</tr>
									<tr valign="top">
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<img src="/images/youtube.jpg" width="75" alt="YOU TUBE: Inventory Videos" border="0">
													<!--RETURN SCRIPT FOR YOUTUBE HERE -->
													<p><font size="-2">(This will come from Josh)<font><p>
													</td>
												</tr>
											</table>
										</td>
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<img src="/images/Facebook2.jpg" width="75" alt="FACEBOOK: 25,000 'LIKES' Fan Page">
													<!--RETURN SCRIPT FOR FB HERE -->
													<p><font size="-2">(This will come from Josh)<font><p>
													</td>
												</tr>
											</table>
										</td>
										<td>
											<table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
												<tr valign="top">
													<td align="center">
													<img src="/images/Cabid.jpg" width="86" alt="Cabid: Bid-Offer Negotiation Leads">
													<!--RETURN SCRIPT FOR CABID HERE -->
													<p><font size="-2">(This will come from Josh)<font><p>
													</td>
												</tr>
											</table>
												</td>
						
									</tr>
					
								</table>
							</td>

						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table align="center">  
			<tr valign="top">
				<td width="220">&nbsp;</td>
				<td align="center" onSubmit="if(!confirm('Are you sure that you want to terminate ALL features for this Dealer?')){return false;}">
				<form id="cancel" name="cancel" method="post" action="CancelServices.php" onSubmit="if(!confirm('Are you sure that you want to terminate ALL services for this Dealer?')){return false;}">
					<input name="DealerName" type="hidden" class="textfield" id="DealerName" value="<?php echo $DealerName; ?>" />
					<input name="submit" type="submit" class="fsSubmitButton" id="submit" value="Turn Off All Features" />
				</form>
		
				</td>
				<td align="center">
				<form id="restore" name="restore" method="post" action="RestoreServices.php" onSubmit="if(!confirm('Are you sure that you want to restore ALL features for this Dealer?')){return false;}">
					<input name="DealerName" type="hidden" class="textfield" id="DealerName" value="<?php echo $DealerName; ?>" />
					<input name="submit" type="submit" class="fsSubmitButton" id="submit" value="Turn On All Features" />
				</form>
				</td>
			</tr>
		</table>
