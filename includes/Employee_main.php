<!--View My Profile-->
<div>
	<a href="/index.php"><strong>MY PROFILE</strong></a>
	<br />
	<form action="NewHireForms.php
		<input class="Button" type="submit" value="New Hire Forms" />
	</form>
	<form action="/Training.php">
		<input class="Button" type="submit" value="Training" />
	</form>
	<form action="MyTransactions.php">
		<input class="Button" type="submit" value="My Transactions" />
	</form>	
	<form action="/MyDealerships.php" name="MyDealerships" id="MyDealerships">
		<input class="Button" type="submit" id="MyDealers" name="MyDealers" value="My Dealerships" /></form>
	<br />

</div>

<!--View Employees-->
<div>
	<a href="/employees.php"><strong>EMPLOYEES</strong></a>
	<form action="/searchEmployeeLastName.php" name="search_Employees" id="search_Employees">
		<input class="Button" type="submit" id="search_employees" name="search_employees" value="Search Employees" />
</form>	
	<br />

</div>

<!--View Dealers-->
<div>
	<a href="/Dealer_List.php"><strong>DEALERS</strong></a>
	<form action="/searchDealerName.php" name="search_Dealer" id="search_Dealer">
		<input class="Button" type="submit" id="search_DealerName" name="search_DealerName" value="Search Dealers"  />
</form>	
	<br />

</div>
<!--Admin Access-->
<form action="/AccountsReceivable" name="receivable" id="receivable">
		<input class="Button" type="submit" id="Actsreceivable" name="Actsreceivable" value="ACCOUNTS RECEIVABLE"  />
</form>
<br />
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

