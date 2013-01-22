<?php 
//GREY OUT FEATURES THAT ARE NOT ACTIVATED
$GetDealerInfo = mysql_query("
	SELECT *
	FROM dealers
	WHERE DealerUserName='$DealerUser'");
while ($row = mysql_fetch_array($GetDealerInfo)) 
	{
		
	$directory = $row['directory'];
	$facebook = $row['facebook'];
	$YouTube = $row['YouTube'];
	$CaBID = $row['CaBID'];
	$SMS = $row['SMS'];


	$DealerID = $row['DealerID'];
	$TimeRegistered = $row['TimeRegistered'];
	$DealerName = $row['DealerName'];
	$DealerCity = ($row['DealerCity']);
	$DealerState = $row['DealerState'];
	$DealerEmail = $row['DealerEmail'];
	$DealerContact = ($row['DealerMainContactFirst']) . " " . ($row['DealerMainContactLast']);
	$DealerContactPhone = ($row['DealerCellPhone1']) . "-" . ($row['DealerCellPhone2']) . "-" . ($row['DealerCellPhone3']);
	$RepName = $row['RepName'];
	$Program = $row['Program'];
	$MemberStatus = $row['MemberStatus'];
					
}


if ($SMS=="SMSDeclined") {
	$SMSclass="FeatureDisabled";
}
else if ($SMS=="SMSON") {
	$SMSclass="FeatureEnabled";
}

if ($CaBID=="CaBIDDeclined") {
	$CaBIDclass="FeatureDisabled";
}
else if ($CaBID=="CaBIDON") {
	$CaBIDclass="FeatureEnabled";
}

if ($YouTube=="YouTubeDeclined") {
	$YouTubeclass="FeatureDisabled";
}
else if ($YouTube=="CaBIDON") {
	$YouTubeclass="FeatureEnabled";
}

if ($facebook=="FacebookDeclined") {
	$Facebookclass="FeatureDisabled";
}
else if ($facebook=="FacebookON") {
	$Facebookclass="FeatureEnabled";
}

if ($directory=="DirectoryDeclined") {
	$Directoryclass="FeatureDisabled";
}
else if ($directory=="directoryON") {
	$Directoryclass="FeatureEnabled";
}
	
?>
<div id="DashboardContent">
<br />
<table>
	<tr valign="top">
		<td colspan="2"><strong>Add-On Features</strong></td>
	</tr>
	<tr valign="top">
	
		<td>
			<table width="100" cellpadding="5" cellspacing="0" border="1">	
				<tr>
					<td width="90" align="center" class="<?php echo $class; ?>">
					Email Leads
					</td>
					<td width="10" align="center">
					&nbsp;
					</td>
				</tr>
	
				<tr>
					<td width="90" align="center" class="<?php echo $SMSclass; ?>">
					SMS Blast
					</td>
					<td width="10" align="center" class="<?php echo $SMSclass; ?>">
					<?php
					if ($SMS=="SMSDeclined") {
						echo "Off";
					}
					else {
					echo "On";
					}
					?>
					</td>
				</tr>
	
				<tr>
					<td width="90" align="center" class="<?php echo $CaBIDclass; ?>">
					Cabid 
					</td>
					<td width="10" align="center" class="<?php echo $CaBIDclass; ?>">
					<?php
					if ($CaBID=="CaBIDDeclined") {
						echo "Off";
					}
					else if ($CaBID=="CaBIDON") {
					echo "On";
					}
					?>
					</td>
				</tr>
	
				<tr>
					<td width="90" align="center" class="<?php echo $YouTubeclass; ?>">
					YouTube  
					</td>
					<td width="10" align="center" class="<?php echo $YouTubeclass; ?>">
					<?php
					if ($YouTube=="YouTubeON") {			
						echo "On";
					}
					else {
						echo "<br />Off";
					}
					?>
					</td>
				</tr>
	
				<tr>
					<td width="90" align="center" class="<?php echo $Facebookclass; ?>">
					FB 25,000 "LIKES" 
					</td>
					<td class="<?php echo $Facebookclass; ?>">
					<?php
					if ($facebook=="facebookON") {			
						echo "On";
					}
					else if ($facebook=="FacebookDeclined") {
						echo "<br />Off";
					}
					?>
					</td>
				</tr>
	
				<tr>
					<td width="90" align="center" class="<?php echo $Directoryclass; ?>">
					Dealer Directory 
					</td>
					<td width="10" class="<?php echo $Facebookclass; ?>">
					<?php
					if ($directory=="directoryON") {			
						echo "On";
					}
					else if ($directory=="DirectoryDeclined") {
						echo "<br />Off";
					}
					?>
					</td>
				</tr>
			</table>
			<table width="100" cellpadding="0" cellspacing="0" border="0">
				<tr valign="top">
					<td align="center">
					<font size="-2"><em>*Grey = disabled.</td>
				</tr>
			</table>
		</td>
		<td>
			<table width="430" cellpadding="0" cellspacing="0" border="0">
				<tr valign="top">		
					<td>
						<table align="center">
							
							<tr valign="top">
								<td><table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
									<tr valign="top">
										<td align="center">
										<strong>Email Leads</strong>	
										<!--RETURN SCRIPT FOR EMAIL LEADS HERE -->
										<p><font size="-2">(This will come from Tommy)<font><p>									</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr valign="top">
								<td>&nbsp;</td>
							</tr>
							<tr valign="top">
								<td align="center"><table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
									<tr valign="top">
										<td align="center">
										<strong>SMS Blast</strong>
										<!--RETURN SCRIPT FOR SMS BLAST HERE -->
										<p><font size="-2">(This will come from Josh & Armando)<font><p>									
										</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr valign="top">
								<td>&nbsp;</td>
							</tr>
							<tr valign="top">
								<td><table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
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
					<td>
						<table align="center">
							
							<tr valign="top">
								<td><table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
									<tr valign="top">
										<td align="center">
										<img src="/images/youtube.jpg" width="75" alt="YOU TUBE: Inventory Videos" border="0">
										<!--RETURN SCRIPT FOR YOUTUBE HERE -->
										<p><font size="-2">(This will come from Josh)<font><p>
										</td>
									</tr>
								</table>
								</td>
							</tr
							<tr valign="top">
								<td>&nbsp;</td>
							</tr>
							<tr valign="top">
								<td><table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
									<tr valign="top">
										<td align="center">
										<img src="/images/Facebook2.jpg" width="75" alt="FACEBOOK: 25,000 'LIKES' Fan Page">
										<!--RETURN SCRIPT FOR FB HERE -->
										<p><font size="-2">(This will come from Josh)<font><p>
										</td>
									</tr>
								</table>
								</td>
							</tr>
							<tr valign="top">
								<td>&nbsp;</td>
							</tr>
							<tr valign="top">
								<td><table width="150" cellpadding="5" cellspacing="0" border="0" class="table2">
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
						</table>
					</td>

				</tr>
			</table>
		</td>
		
	</tr>
</table>

<br />
</div>
