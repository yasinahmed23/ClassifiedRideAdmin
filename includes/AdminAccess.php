	<form action="/Referrals.php" name="REFERRAL LIST" id="REFERRAL LIST">
		<input class="Button" type="submit" id="REFERRAL_LIST" name="REFERRAL_LIST" value="Referral List"  />
</form>
	<form action="/transactions.php" name="trans" id="trans">
		<input class="Button" type="submit" id="trans" name="trans" value="All Transactions"  />
</form>
	<form action="/searchTransactionDealerName.php" name="searchTransactionDealer" id="searchTransactionDealer">
		<input class="Button" type="submit" id="search_TransactionDealer" name="search_TransactionDealer" value="Search by Dealer Name"  />
</form>
	<!--<form action="/searchTransactionTransID.php" name="searchTransaction" id="searchTransaction">
		<input class="Button" type="submit" id="search_TransactionID" name="search_TransactionID" value="Search by Transaction"  />
	</form>-->
	
	<form action="/searchTransactionEmployeeName.php" name="searchTransaction" id="searchTransaction">
		<input class="Button" type="submit" id="search_EmployeeName" name="search_EmployeeName" value="Search by Employee Name"  />
	</form>
	<form action="/logoutAdmin.php" name="Logout" id="Logout" onSubmit="alert('You are now logged in as an employee');">
		<br />
		<input class="Button" type="submit" id="LogoutAdmin" name="LogoutAdmin" value="Logout Admin"  />
	</form>
