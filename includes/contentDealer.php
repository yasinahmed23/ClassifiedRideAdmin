<?php 
require_once 'Functions/DealerFunctions.php';
?>
<div id="DealerDash">
	<table width="570" cellpadding="0" cellspacing="0" border="0">
		<tr valign="top">
			<td align="center"> 
			<font size="+1"><strong>DEALER DASHBOARD</strong></font>
			</td>
		</tr>
	</table>
	<table width="570" cellpadding="5" cellspacing="0" border="0" class="table">
		<tr valign="top">
			<td>
			<font size="+1"><strong>Leads by <?php echo $RepName; ?></strong></font>
				<?php include 'Dealer_Dash.php'; ?>
			</td>
		</tr>
	</table>
</div>
<div id="DealerProfile">	
	<table width="330" cellpadding="0" cellspacing="0" border="0" align="right">
		<tr valign="top">	
			<td align="center">
			<font size="+1"><strong>DEALERSHIP PROFILE</strong></font>
			</td>
		</tr>
	</table>
	<table width="330" cellpadding="5" cellspacing="0" border="0" class="table" align="right">
	<tr valign="top">	
		<td align="center">
			<?php include 'Dealer_Profile.php'; ?>
		</td>
	</tr>
</table>

</div>

