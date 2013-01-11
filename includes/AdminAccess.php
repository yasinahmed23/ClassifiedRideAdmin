<div>
	<a href="/transactions.php"><strong>TRANSACTIONS</strong></a>
	<form action="/searchTransactionDealerName.php" name="searchTransactionDealer" id="searchTransactionDealer">
		<input class="textfield, Button" type="submit" id="search_TransactionDealer" name="search_TransactionDealer" value="Search by Dealer Name"  />
</form>
	<!--<form action="/searchTransactionTransID.php" name="searchTransaction" id="searchTransaction">
		<input class="textfield, Button" type="submit" id="search_TransactionID" name="search_TransactionID" value="Search by Transaction"  />
	</form>-->
	
	<form action="/searchTransactionEmployeeName.php" name="searchTransaction" id="searchTransaction">
		<input class="textfield, Button" type="submit" id="search_EmployeeName" name="search_EmployeeName" value="Search by Employee Name"  />
	</form>
	<form action="/Referrals.php" name="searchTransaction" id="searchTransaction">
		<input class="textfield, Button" type="submit" id="All Referrals" name="AllReferrals" value="All Referrals"  />
	</form>
	<br />
	<form action="/logoutAdmin.php" name="Logout" id="Logout" onSubmit="alert('You are now logged in as an employee');">
		<input class="textfield, Button" type="submit" id="LogoutAdmin" name="LogoutAdmin" value="Logout Admin"  />
	</form>
	
</div>
