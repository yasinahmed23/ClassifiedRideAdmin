<?php

	//Enable Session Variables	
	session_start();	

	//Connect to Database	
	include 'db_config2.php';
	require_once '../Functions/Functions.php';

	set_error_handler('error_handler');

	//Save user input as variable	
	$EmplFirstName = stripslashes($_POST['EmplFirstName']);
	$EmplMiddleInitial = stripslashes($_POST['EmplMiddleInitial']);
	$EmplLastName = stripslashes($_POST['EmplLastName']);
	$EmplStreet1 = stripslashes($_POST['EmplStreet1']);
	$EmplStreet2 = stripslashes($_POST['EmplStreet2']);
	$EmplCity = stripslashes($_POST['EmplCity']);
	$EmplState = stripslashes($_POST['EmplState']);
	$EmplZip = stripslashes($_POST['EmplZip']);
	$EmplCountry = stripslashes($_POST['EmplCountry']);
	$EmplCellPhone1 = stripslashes($_POST['EmplCellPhone1']);
	$EmplCellPhone2 = stripslashes($_POST['EmplCellPhone2']);
	$EmplCellPhone3 = stripslashes($_POST['EmplCellPhone3']);
	$EmplHome1 = stripslashes($_POST['EmplHome1']);
	$EmplHome2 = stripslashes($_POST['EmplHome2']);
	$EmplHome3 = stripslashes($_POST['EmplHome3']);
	$EmplEmail = stripslashes($_POST['EmplEmail']);
	$EmplPayFirstName = stripslashes($_POST['EmplPayFirstName']);
	$EmplPayMiddleInitial = stripslashes($_POST['EmplPayMiddleInitial']);
	$EmplPayLastName = stripslashes($_POST['EmplPayLastName']);
	$BusPayName = stripslashes($_POST['BusPayName']);
	$EmplPayStreet1 = stripslashes($_POST['EmplPayStreet1']);
	$EmplPayStreet2 = stripslashes($_POST['EmplPayStreet2']);
	$EmplPayCity = stripslashes($_POST['EmplPayCity']);
	$EmplPayState = stripslashes($_POST['EmplPayState']);
	$EmplPayZip = stripslashes($_POST['EmplPayZip']);
	$EmplPayCountry = stripslashes($_POST['EmplPayCountry']);
	$EmplPayCell1 = stripslashes($_POST['EmplPayCell1']);
	$EmplPayCell2 = stripslashes($_POST['EmplPayCell2']);
	$EmplPayCell3 = stripslashes($_POST['EmplPayCell3']);
	$EmplPayEmail = stripslashes($_POST['EmplPayEmail']);
	$ReferredBy = stripslashes($_POST['search_string']);

	$EmplUserName = trim(strtolower($_POST['EmplUserName']));
	$EmplUserName = stripslashes($EmplUserName);
	
	$EmplPassword = stripslashes($_POST['EmplPassword']);
	$EmplPassword2 = stripslashes($_POST['EmplPassword2']);	

	$EmplFirstName = mysql_real_escape_string($EmplFirstName);
	$EmplMiddleInitial = mysql_real_escape_string($EmplMiddleInitial);
	$EmplLastName = mysql_real_escape_string($EmplLastName);
	$employee = ($EmplFirstName . " " . $EmplMiddleInitial . " " . $EmplLastName);
	$EmplStreet1 = mysql_real_escape_string($EmplStreet1);
	$EmplStreet2 = mysql_real_escape_string($EmplStreet2);
	$EmplCity = mysql_real_escape_string($EmplCity);
	$EmplState = mysql_real_escape_string($EmplState);
	$EmplZip = mysql_real_escape_string($EmplZip);
	$EmplCountry = mysql_real_escape_string($EmplCountry);
	$EmplCellPhone1 = mysql_real_escape_string($EmplCellPhone1);
	$EmplCellPhone2 = mysql_real_escape_string($EmplCellPhone2);
	$EmplCellPhone3 = mysql_real_escape_string($EmplCellPhone3);
	$EmplHome1 = mysql_real_escape_string($EmplHome1);
	$EmplHome2 = mysql_real_escape_string($EmplHome2);
	$EmplHome3 = mysql_real_escape_string($EmplHome3);
	$EmplEmail = mysql_real_escape_string($EmplEmail);
	$EmplPayFirstName = mysql_real_escape_string($EmplPayFirstName);
	$EmplPayMiddleInitial = mysql_real_escape_string($EmplPayMiddleInitial);
	$EmplPayLastName = mysql_real_escape_string($EmplPayLastName);
	$BusPayName = mysql_real_escape_string($BusPayName);
	$EmplPayStreet1 = mysql_real_escape_string($EmplPayStreet1);
	$EmplPayStreet2 = mysql_real_escape_string($EmplPayStreet2);
	$EmplPayCity = mysql_real_escape_string($EmplPayCity);
	$EmplPayState = mysql_real_escape_string($EmplPayState);
	$EmplPayZip = mysql_real_escape_string($EmplPayZip);
	$EmplPayCountry = mysql_real_escape_string($EmplPayCountry);
	$EmplPayCell1 = mysql_real_escape_string($EmplPayCell1);
	$EmplPayCell2 = mysql_real_escape_string($EmplPayCell2);
	$EmplPayCell3 = mysql_real_escape_string($EmplPayCell3);
	$EmplPayEmail = mysql_real_escape_string($EmplPayEmail);
	$ReferredBy = mysql_real_escape_string($ReferredBy);
	$EmplUserName = mysql_real_escape_string($EmplUserName);
	$EmplPassword = mysql_real_escape_string($EmplPassword);
	$EmplPassword2 = mysql_real_escape_string($EmplPassword2);	

	$EmplPassword = hash( 'sha256', $EmplPassword );
	$employee = ($EmplFirstName . " " . $EmplMiddleInitial . " " . $EmplLastName);

	//Run query to Add user to database	
	$add_employee = "
	INSERT INTO employees (EmplFirstName, EmplMiddleInitial, EmplLastName, employee, EmplStreet1, EmplStreet2, EmplCity, EmplState, EmplZip, EmplCountry, EmplEmail, EmplCellPhone1, EmplCellPhone2, EmplCellPhone3, EmplHome1, EmplHome2, EmplHome3, EmplPayFirstName, EmplPayMiddleInitial, EmplPayLastName, BusPayName, EmplPayStreet1, EmplPayStreet2, EmplPayCity, EmplPayState, EmplPayZip, EmplPayCountry, EmplPayCell1, EmplPayCell2, EmplPayCell3, EmplPayEmail, ReferredBy, EmplUserName, EmplPassword)
	VALUES ('$EmplFirstName', '$EmplMiddleInitial', '$EmplLastName', '$employee', '$EmplStreet1', '$EmplStreet2', '$EmplCity', '$EmplState', '$EmplZip', '$EmplCountry', '$EmplEmail', '$EmplCellPhone1', '$EmplCellPhone2', '$EmplCellPhone3', '$EmplHome1', '$EmplHome2', '$EmplHome3', '$EmplPayFirstName', '$EmplPayMiddleInitial', '$EmplPayLastName', '$BusPayName', '$EmplPayStreet1', '$EmplPayStreet2', '$EmplPayCity', '$EmplPayState', '$EmplPayZip', '$EmplPayCountry', '$EmplPayCell1', '$EmplPayCell2', '$EmplPayCell3', '$EmplPayEmail', '$ReferredBy', '$EmplUserName', '$EmplPassword')";

	restore_error_handler();

	$result= mysql_query($add_employee);
	if (!$result) {
    		die('There was an error- Please go back and try again.  We have been notified of this error');
		}

	//Get Employee ID of New Hire's Manager
	$GetEmployeeID = mysql_query("
		SELECT employeeID
		FROM  employees
		WHERE employee='$ReferredBy'");

	while ($row = mysql_fetch_array($GetEmployeeID)) {
		$RefemployeeID = $row['employeeID'];
	}

	//UPDATE REFERRAL TABLE
	$addReferal = "
	INSERT INTO Referrals (EmployeeID, EmployeeName, NewEmpEmail, NewEmplName)
	VALUES ('$RefemployeeID', '$ReferredBy', '$EmplEmail', '$employee')";

	$result= mysql_query($addReferal);
	if (!$result) {
    		die('Invalid query: ' . mysql_error());
		}

	//Create session variable from data and redirect page
	$_SESSION['user']=$EmplUserName;
	$EmplPassword= hash( 'sha256', $EmplPassword );	
	$_SESSION['pass']=$EmplPassword;
	
	//SEND NEW HIRE NOTIFICATION VIA EMAIL
		$to = "classifiedridewebsite@gmail.com";
		$subject = $employee . " Registered";
		$message = "
		New Employee Added: " . $employee . "!  Hired by " .  $ReferredBy;
		$from = "classifiedridewebsite@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);

	//SEND NEW HIRE NOTIFICATION VIA EMAIL TO MANAGER

		//Get Managers email address
			$GetManagersEmail = mysql_query("
				SELECT EmplEmail
				FROM  employees
				WHERE employee='$ReferredBy'");

			while ($row = mysql_fetch_array($GetManagersEmail)) {
				$ManagersEmail = $row['EmplEmail'];
			}

		$to = $ManagersEmail;
		$subject = $employee . " Registered";
		$message = 
		$employee . " registered !" ;
		$from = "classifiedridewebsite@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
	
	//SEND LOGIN INFO VIA EMAIL TO NEW HIRE
		$to = $EmplEmail; 
		$subject = "Welcome Aboard " . $EmplFirstName . "!";
		$message = 
		"Thanks for Registering " . $EmplFirstName . "!  Don't forget to upload your New Hire Documents!  Your username is " . $EmplUserName;
		$from = "classifiedridewebsite@gmail.com";
		$headers = "From:" . $from;
		mail($to,$subject,$message,$headers);
	
	header( 'Location: /NewHireForms.php' ) ;
?>

	

