<?php
	while ($row = mysql_fetch_array($GetNewHireInfo)) 
	{
		$ConfidentialityAgreement = $row['ConfidentialityAgreement'];
		$IndependentContractorAgreement = $row['IndependentContractorAgreement'];
		$w9= $row['w9'];

	}
if(!($ConfidentialityAgreement == NULL)&& !($IndependentContractorAgreement == NULL) && !($w9 == NULL))
	{
	echo "";
	
	}
	else {
	echo "<center><font color='#FF0000'><strong><em>You have not uploaded your New Hire Paperwork yet! You need to do this to get paid!  <br /><a href='/NewHireForms.php'><font color='#FF0000'>CLICK HERE TO UPLOAD NOW</font></a></em></center></strong></font>";
	}
?>
<div id="DownloadFiles">
	<p><font size="+1"><strong>MY PROFILE: </strong></font></p>	
	<?php 
		include 'profile.php';
	?>	
	
</div>

	
<div id="UploadNewHire">
	<table width="300" align="center">
		<tr>
			<td>		
			<p align="center"><font size="+1"><strong>EDIT PROFILE: </strong></font></p>
			<div id="change_password">	
				<?php include 'includes/change_password_form.php';?>
				<?php include 'includes/verify_change_passwords.php';?>
			</div>
			
			<div id="upload_pic">
				<?php include 'includes/UploadPicForm.php';?>
			</div>
			</td>
		</tr>
	</table>	
</div>

	
	
