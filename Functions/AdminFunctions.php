<?php
	//Count Total Employees
	$CountEmployees = mysql_query("
		SELECT  employeeID
		FROM   employees");
		$NumEmployees = mysql_num_rows($CountEmployees);

	//Count Employees From Last 7 Days
	$CountEmployees7Days = mysql_query("
		SELECT  employeeID
		FROM   employees
		where TimeRegistered between date_sub(now(),INTERVAL 7 DAY) and now()");
		$NumEmployees7Days = mysql_num_rows($CountEmployees7Days);

	//Count Total Dealers
	$CountDealers = mysql_query("
		SELECT  DealerID
		FROM    dealers");
		$NumDealers = mysql_num_rows($CountDealers);

	//Count Dealers From Last 7 Days
	$CountDealers7Days = mysql_query("
		SELECT  DealerID
		FROM    dealers
		where TimeRegistered between date_sub(now(),INTERVAL 7 DAY) and now()");
		$NumDealers7Days= mysql_num_rows($CountDealers7Days);


	//Count Total Transactions
	$CountTransactions = mysql_query("
		SELECT  TransactionID
		FROM     transactions");
		$NumTransactions = mysql_num_rows($CountTransactions);

	//Count Number of Registrations
	$CountNumRegs = mysql_query("
		SELECT  registered
		FROM     transactions
		WHERE registered != ' '");
		$NumRegistrations = mysql_num_rows($CountNumRegs);


	//Count Revenue from  Registrations
	$CountRegistrations = mysql_query(" 
		SELECT SUM(registered) 
		AS total FROM transactions");
	$RegestrationTotal = mysql_fetch_assoc($CountRegistrations);

	//Count Number of Renewals
	$CountNumRenewed = mysql_query("
		SELECT  Renewed
		FROM transactions
		WHERE Renewed != ' '");
		$NumRenewals = mysql_num_rows($CountNumRenewed);


	//Count Revenue from  Renewals
	$CountRenewals = mysql_query(" 
		SELECT SUM(Renewed) 
		AS total FROM transactions");
	$RenewalTotal = mysql_fetch_assoc($CountRenewals);

	//Count Total Renevue
	$TotalRevenue=($RenewalTotal[total]+$RegestrationTotal[total]);

	//Count Total Commission
	$CountTotalComm = mysql_query(" 
		SELECT SUM(Commission) 
		AS total FROM transactions");
	$CommTotal = mysql_fetch_assoc($CountTotalComm);

	//Count Commission from last 7 days
	$CountComm7Days = mysql_query(" 
		SELECT SUM(Commission) 
		AS total FROM transactions
		where TransactionDate between date_sub(now(),INTERVAL 7 DAY) and now()");
	$Comm7Days = mysql_fetch_assoc($CountComm7Days);

	//Calculate Net 
	$NetProfit=($TotalRevenue-$CommTotal[total]);
		
?>
