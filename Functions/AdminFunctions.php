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
	$NumDealers7Days	 = mysql_num_rows($CountDealers7Days);

//Count Total Transactions
	$CountTransactions = mysql_query("
	SELECT  TransactionID
	FROM     transactions");
	$NumTransactions = mysql_num_rows($CountTransactions);


?>
