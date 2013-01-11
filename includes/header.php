<div id="logo">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr valign="top">
			<td><h1>Welcome to the <img src="/images/logo2.png" width="200"> Employee/Dealer Database</h1>
			<div id="ClickDealer">
          	 	<?php
		   		if (!isset($_SESSION[user])) {
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
					else {echo "<br />" . $user . " you are logged in.";
					echo "<br />";
					echo "<form action='logout.php' onSubmit='alert('You are now logged out');' name='logout' id='logout'><input type='submit' value='Log Out' id='logout' name='logout' class='Button' /></form>";}

				?></div>
			</td>
		</tr>
	</table>
</div>
