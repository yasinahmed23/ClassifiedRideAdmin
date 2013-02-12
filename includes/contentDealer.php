<?php 
require_once 'Functions/DealerFunctions.php';
?>
<h2 align="center"><?php echo $DealerName; ?></h2>
<div id="DealerDash">
	<table width="430" cellpadding="0" cellspacing="0" border="0">
		<tr valign="top">
			<td align="center"> 
			<strong>DEALER DASHBOARD</strong>
			</td>
		</tr>
	</table>
	<table width="430" cellpadding="5" cellspacing="0" border="0" class="table">
		<tr valign="top">
			<td>
			<strong>Leads by <?php echo $RepName; ?></strong>
				<?php include 'Dealer_Dash.php'; ?>
			</td>
		</tr>
	</table>
</div>
<div id="DealerProfile">	
	<table width="480" cellpadding="0" cellspacing="0" border="0" align="right">
		<tr valign="top">	
			<td align="center">
			<strong>DEALERSHIP PROFILE</strong>
			</td>
		</tr>
	</table>
	<table width="480" cellpadding="5" cellspacing="0" border="0" class="table" align="right">
		<tr valign="top">	
			<td align="center">
			<?php include 'Dealer_Profile.php'; 
			?>
			</td>
		</tr>
	</table>
</div>
