<div id="DownloadFiles">
		<center><p><font size="+1"><strong>STEP 1: Download New Hire Forms: </strong></font>
		<br />
		<font size="-2"><em>Please download these forms, read them, fill out, sign them, <br />and upload completed pdf to the right.</em></font></p></center>
		<table cellpadding="0" cellspacing="0" width="375" border="0">
		<tr><td colspan="2">&nbsp;</td></tr>
			<tr>
				<td width="220"><p><a href="/NewHire/confidentiality_agreement.pdf">Confidentiality Agreement</a></td>
				<td width="155" align="center"><a href="/NewHire/confidentiality_agreement.pdf"><img src="images/adobeicon.jpg" border="0"></a></td>
			</tr>
			<tr>
				<td width="220"><p><a href="/NewHire/independent_contractor.pdf">Independent Contractor Agreement</a></td>
				<td width="155" align="center"><a href="/NewHire/independent_contractor.pdf"><img src="images/adobeicon.jpg" border="0"></a></td>
			</tr>
			<tr>
				<td width="220"><p><a href="/NewHire/w9.pdf">Upload W-9 Form</a></td>
				<td width="155" align="center"><a href="/NewHire/w9.pdf"><img src="images/adobeicon.jpg" border="0"></a></td>
			</tr>	
		</table>
	
	</div>
	<div id="spacer">&nbsp;</div>
	<div id="UploadNewHire">
		<table align="center"><tr><td>		
		<center><p><font size="+1"><strong>STEP 2: Upload New Hire Forms: </strong></font></p></center>
		<br /><br /><br />
		<form action="upload_file.php" method="post" enctype="multipart/form-data">
			<input type="file" class="textfield" name="ConfidentialityAgreement" id="ConfidentialityAgreement" /> 
			<br />
			<label for="file"><strong>Please Upload Confidentiality Agreement</strong></label>
			<br /><br />
			<input type="file"class="textfield"  name="IndependentContractorAgreement" id="IndependentContractorAgreement" />
			<br />
			<label for="file"><strong>Please Upload Independent Contractor Agreement </strong></label>
			<br /><br />
			
			<input type="file" class="textfield"  name="w9" id="w9" /> 
			<br />
			<label for="file"><strong> Please Upload W-9 Form</strong></label>
			<br /><br />
			<input type="submit" class="Button"  name="submit" value="Upload" />
		</form><br /></td></tr></table>
		</div>
	</div>
