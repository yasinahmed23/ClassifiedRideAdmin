<?php include_once("GoogleAnalyticsTracking.php") ?>
<div id="logo">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr valign="top">
			<td><h1>Welcome to <img src="/images/logo2.png" width="200"> ADMIN</h1>
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
					if (!isset($_SESSION[admin])) {
						include 'login_form.php';
						}
					else {echo "<br />" . $admin . " you are logged in as Admin";
					echo "<br />";
					echo "<form action='logout.php' onSubmit='alert('You are now logged in as an employee');' name='logout' id='logout'><input type='submit' value='Log Out' id='logout' name='logout' class='Button' /></form>";}

				?></div>
			</td>
		</tr>
	</table>
</div>
