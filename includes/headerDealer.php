<div id="logo">
	<table>
		<tr>
			<td><h1>Welcome to the <img src="/images/logo2.png" width="200"> Employee/Dealer Database</h1>
		  	 	<?php
			   		if (!isset($_SESSION[DealerUser])) {
					echo "<font color='#FFFFFF'><a href='index.php'><font color='#FFFFFF'>Click Here if you are an Employee</font></a>";}
					else {}
			   	?>
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
			else {echo $DealerUser . " you are logged in.";
			echo "<br />";
			echo "<form action='logoutDealer.php' onSubmit='alert('You are now logged out');' name='logout' id='logout'><input type='submit' value='Log Out' id='logout' name='logout' class='Button' /></form>";}

		?></div>
	</td></tr></table>
</div>
