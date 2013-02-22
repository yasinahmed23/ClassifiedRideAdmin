<!--View My Profile-->
<div>
	<a href="/AccountsReceivable/index.php"><strong>ACCOUNTS RECEIVABLE</strong></a>
	<br /><br />
</div>

<!--View Dealers-->
<div>
<?php
if (!isset($_SESSION[admin])) {
	echo "<a href='/AccountsReceivable/index.php'><strong>DEALERS</strong></a>
	<form action='/searchDealerNameAR.php' name='searchDealers' id='searchDealers'>
		<input class='Button' type='submit' id='searchDealers' name='searchDealers' value='Search Dealers'  />
	</form>	
	<br />";
}
?>
	
	<a href="/AccountsReceivable/Invoices.php"><strong>INVOICES</strong></a>
	<form action="/AccountsReceivable/OverDueInvoices.php" name="OverDueInvoices" id="OverDueInvoices">
		<input class="Button" type="submit" id="OverDueInvoices" name="OverDueInvoices" value="Over Due"  />
	</form>	
	<br />
</div>

<!--Admin Access-->
<a href="/AdminDashboard.php"><strong>ADMIN DASHBOARD</strong></a>
<div>
<?php	
	if (!isset($_SESSION[admin])) {
		require_once 'NoAdminAccess.php';
	}
	else {
			include 'AdminAccess.php';
		}
	
	?>
</div>

