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
	<a href="/AccountsReceivable/index.php"><strong>DEALERS</strong></a>
	<form action="/searchDealerName.php" name="search_Dealer" id="search_Dealer">
		<input class="Button" type="submit" id="search_DealerName" name="search_DealerName" value="Search Dealers"  />
</form>	
	<br />

</div>	

<form action="/AccountsReceivable/index.php" name="receivable" id="receivable">
		<input class="Button" type="submit" id="Actsreceivable" name="Actsreceivable" value="ACCOUNTS RECEIVABLE"  />
</form>


<form action="/Referrals.php" name="REFERRAL LIST" id="REFERRAL LIST">
		<input class="Button" type="submit" id="REFERRAL_LIST" name="REFERRAL_LIST" value="Referral List"  />
</form>
	<br />
	<a href="/transactions.php"><strong>All Transactions</strong></a> 
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
