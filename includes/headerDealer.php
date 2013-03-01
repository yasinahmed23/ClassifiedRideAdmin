<?php include_once("GoogleAnalyticsTracking.php");?>
<div id="logo">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr valign="top">
			<td><td><h1>Welcome to the<img src="/images/logo3.png" width="200" height="50" alt="Classified Ride Admin" />Dealer Database </h1>
				<div id="ClickDealer">
		  	 	<?php
			   		if (!isset($_SESSION[DealerUser])) {
					echo "<font color='#FFFFFF'><a href='index.php'><font color='#FFFFFF'>Click Here if you are an Employee</font></a>";}
					else {}
			   	?>
				</div>
          		</td>
		</tr>
	</table>
</div>	
<div id="login">
	<table align="right">
		<tr valign="top">
			<td align="right">
				<div id="login-contents"><br />
			<?php	
				loginDealer($connector);
			?>
			</div>
			</td>
		</tr>
	</table>
</div>
