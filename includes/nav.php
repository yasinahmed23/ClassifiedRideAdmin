<?php 
	if (isset($_SESSION[admin])) { ?>
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

		<a href="/AccountsReceivable/index.php"><strong>ACCTS RECEIVABLE</strong></a>
		<br />
		<form action='/searchDealerNameAR.php' name='searchDealers' id='searchDealers'>
					<input class='Button' type='submit' id='searchDealers' name='searchDealers' value='Search Dealers'  />
		</form>
		<!--<form action="/AccountsReceivable/Invoices.php" name="Invoices" id="Invoices">
			<input class="Button" type="submit" id="Invoices" name="Invoices" value="Invoices"  />-->
		</form>	
		<form action="/AccountsReceivable/OverDueInvoices.php" name="OverDueInvoices" id="OverDueInvoices">
			<input class="Button" type="submit" id="OverDueInvoices" name="OverDueInvoices" value="Over Due"  />
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
			<br />

		<form action="/Referrals.php" name="REFERRAL LIST" id="REFERRAL LIST">
				<input class="Button" type="submit" id="REFERRAL_LIST" name="REFERRAL_LIST" value="Referral List"  />
		</form>
			<form action="/logoutAdmin.php" name="Logout" id="Logout" onSubmit="alert('You are now logged in as an employee');">
				<br />
				<input class="Button" type="submit" id="LogoutAdmin" name="LogoutAdmin" value="Logout Admin"  />
			</form>
		<?php 
		}
		else if (isset($_SESSION[ARadmin])) { ?>

			<!--AR -->
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
					echo "<div><font size='-2'><strong>ADMIN ACCESS</strong></font>";
					include 'login_form_admin.php'; 
					echo "</div>";
				}
				else { ?>
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
				<?php }
	
				?>
			</div>
		

		<?php 		
		}
			
		else { ?>
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

		<div>
		<form action="/AccountsReceivable/index.php" name="AR" id="AR">
			<input class="Button" type="submit" id="ARHome" name="ARHome" value="Accounts Receivable"  />
		</form>	
		<br />
		</div>		

		<div><font size="-2"><strong>ADMIN ACCESS</strong></font>
		<?php 
			include 'login_form_admin.php'; 
		?></div>
		<!--Admin Access-->
		<?php
		}
?>
