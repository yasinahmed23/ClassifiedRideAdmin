<?php include_once("GoogleAnalyticsTracking.php") ?>
<div id="logo">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr valign="top">
			<td><h1>Welcome to the <img src="/images/logo2.png" width="200"> Dealer Database</h1>
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
	<table align="right"><tr valign="bottom"><td align="right">
		<div id="login-contents"><br />
		<?php	
			if (!isset($_SESSION[DealerUser])) {
				include 'Dealer_login_form.php';
				echo "<center><a href='dealers/ResetDealerPass.php'>Reset Password</a></center>";
			}
			else {
				echo $DealerUser . " you are logged in.";
				echo "<br />";
				echo "<form action='logoutDealer.php' onSubmit='alert('You are now logged out');' name='logout' id='logout'><input type='submit' value='Log Out' id='logout' name='logout' class='Button' /></form>";
			}
		?>
		</div>
	</td></tr></table>
</div>
