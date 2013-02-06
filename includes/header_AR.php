<?php include_once("GoogleAnalyticsTracking.php") ?>
<div id="logo">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr valign="top">
			<td><h1>Welcome to the<img src="/images/logo3.png" width="200" height="50" alt="Classified Ride Admin" /> 		
			<?php 
			if (isset($_SESSION[admin])) {
			echo "Admin Accounts Receivable";
			}
			else {
			echo "Accounts Receivable";
			}
			?>			
			</h1>
			<div id="ClickDealer">
          	 	<?php
		   		if (!isset($_SESSION[ARadmin])) {
				echo "<font color='#FFFFFF'><a href='Dealers.php'><font color='#FFFFFF'>Click Here if you are a Dealer</font></a>";}
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
					if (!isset($_SESSION[user])) {
						include 'login_form.php';
						echo "<center><a href='/ResetEmplPass.php'>Reset Password</a></center>";
						}
					else {echo "<br />" . $user . " you are logged in as AR.";
					echo "<br />";?>
				<form action="/logoutAR.php" name="Logout" id="Logout" onSubmit="alert('You are now logged in as an employee');">
							<input class="Button" type="submit" id="LogoutAdmin" name="LogoutAdmin" value="Logout AR"  />
						</form>
				<?php } ?></div>
			</td>
		</tr>
	</table>
</div>
