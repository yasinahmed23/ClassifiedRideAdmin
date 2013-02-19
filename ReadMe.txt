   THis application is still in process, but it will give you a starting place and an idea of what it is supposed to do in the end.  Feel free to log in in the different modules and look around.  :)


CLASSIFIED RIDE ADMIN SITE - - Created By Stephanie McGlathery

(https://github.com/stephmcglathery/ClassifiedRideAdmin.git)
(stephmcglathery.com => once completed this will move to ClassifiedRide.com/admin)

**********************************************************************************
There are 4 Main Log-in Systems.

1) Employee Database (/index.php)
2) Dealer (Customer) Database (/Dealers.php)
3) AR (Limited Admin Account for purposes of Accounts Receivable) 
   (/AccountsReceivable/index.php)
4) Admin Access (/AdminDashboard.php)

**********************************************************************************
1) Employee Database (/index.php)
**********************************************************************************
- Employees will register, upload new hire paperwork, and upload a 
  contact pic.  They can make changes to their personal info 
  (profile), reset password, etc
- If not logged in you will see register and login form
- If logged in, you will see your profile page
- Once they make a sale (Sign a Dealership) that Dealer
  will appear in their list.  
- They will have basic cust info available 
  for their dealers (contact info, inform if a pmt is needed)
- Training videos will be available (/Training.php)
- Basic info about other employees and customers will be available 
  as well as searchable (/employees.php & /Dealer_List.php)
- If an employee is also a manager (hires employees) they will be 
  able to view activity of their employees
- "My Transactions" will list any transactions in which the employee
  earns commission or a bonus (dealers and employees hired)  It will 
  also show running totals.

	*Demo Login as a brand-new Employee who hasn't sold anything:
	testuser / pass

	*Demo Login as a regular Employee:
	stephmcglathery / pass


**********************************************************************************
2) Dealer Database (/Dealers.php)
**********************************************************************************
- Dealers will register for ClassifiedRide.com, customize their program, and select their Rep 
  from employee database via jquery auto-complete search .  They can 
  also make changes to their profile)
- If not logged in you will see register and login form
- If logged in, you will see your dashboard and profile
- The Dealer Dashboard shows which features are turned on and which 
  are turned off.  If a feature is turned on, it will show you the
  results (What we are actually doing for you so you can track)
- The Dealer Profile will show you your monthly payment and past 
  transactions.  
- The Dealer Profile will also show your Reps Name, number, and profile 
  pic which you can click to email.

	*Demo Log in for Dealerships :
	MyDealer1 / pass

**********************************************************************************
3) AR  (/AccountsReceivable/index.php)
**********************************************************************************
- All Employee Features + the folloowing
- View a more detailed list of Dealers and searchable (Last "X" Days 
  as well as by Dealer Name)
- Search Results Page will list more detailed info (Dealer Dash)
- AR can write and update notes (ex: Main Contact is off on Monday's)
- AR can cancel services for the dealership and/or override payments
  and issue refunds
- AR will set the start date for services (once coordinate the feeds)
- AR can turn features on and off
- AR can assist with manual payments (ex: mailed check)
- Invoices - Be able to see who has paid and who is over due
- Over Due - Sort by Week, Month, & Year Show Due Date, Status, 
  How much past Due, Pmt Method
	
	*Demo Log in for Accounts Receivable:
	ARtest / pass


**********************************************************************************
4) ADMIN  (/AdminDashboard.php)
**********************************************************************************
- All Employee Features + AR Features + the following
- Here you can manage any employee and any dealer
- Extra Features on Employee pages
	- Employees Page - can search by last "x" days and/or export 
	  data to .csv (/employees.php)
	- Dealers Page - can search by last "x" days and/or export 
	  data to .csv (/Dealer_List.php)
- Transactions Page lists all transactions and can searched by last "x" 
  days and/or export data to .csv
	- Search results will provide more detailed info
- Admin Dashboard has 3 parts (Employees, Dealers, & Transactions)
	- Employee Overview shows Total # and Total # from past 7 days
	- Dealer OVerview shows same as well as # that are overdue
	- Transactions Overview breaks down totals from Registration's
	  & Renewals as well as total Revenue, Total Commission paid, 
	  and Net
- Referrals page summarizes who hired who and how many dealerships they
  signed as well as how many of those are still active (/Referrals.php)
- Calculate and Handle Payroll

	*Demo Log in for Admin :
	AdminTestUser / abc123

**********************************************************************************
Technologies Used
**********************************************************************************
- LAMP
- Ajax Log-in Systems
- Sessions
- Javascript Form Validation
- jQuery auto-complete search
- jQuery infinite scroll 
- Password Hashing
- Error Handling / Error Logging
- Google Analytics
- Cron database backup
- Integrated Gateway for Merchant Services (Still in process) to accept monthly payments 
  from Dealerships
- Geo IP
