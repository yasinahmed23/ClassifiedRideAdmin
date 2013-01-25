<?php
	//Enable Session Variables	
	session_start();
	$user = $_SESSION['user'];

	//Connect to Database	
	require_once '../includes/db_config2.php';

	$GetEmployees = mysql_query("
	SELECT employeeID
	FROM employees
	");
	$num_rows = mysql_num_rows($GetEmployees);
?>
	<?php
		$LoadMoreEmployees = mysql_query('
		SELECT * 
		FROM employees 
		WHERE employeeID > "'.mysql_real_escape_string($_GET['lastEmployee']).'" 
		AND employeeID <= "'.$num_rows.'" 
		ORDER BY employeeID ASC
		LIMIT 5	
		');

		$val = $_GET['lastEmployee'];

		while($data = mysql_fetch_object($LoadMoreEmployees)) 
		{
			$TimeRegistered = $data->TimeRegistered;
			$employeeID = $data->employeeID ;
			$EmplFirstName = $data->EmplFirstName;
			$EmplLastName = $data->EmplLastName ;
			$EmplEmail = $data->EmplEmail ;
			$EmplCity = $data->EmplCity ;
			$EmplState = $data->EmplState ;
			$pic = $data->pic ;
	
			echo "
			<div class='postedEmployee' employeeID=\"$data->employeeID \">
				<li><b>Employee ID : </b>"."$employeeID </li> 
				<li><b>Employee Firstname : </b>"."$EmplFirstName </li>
				<li><b>Employee Lastname : </b>"."$EmplLastName</li> 
				<li><b>Employee Email : </b>"."<a href='mailto:$EmplEmail'>$EmplEmail</a></li> 	
				<li><b>Employee City : </b>"."$EmplCity </li>		
				<li><b>Employee State : </b>"."$EmplState </li>			
				<li>";printf("<img src='/uploads/$pic' width='100'>");echo "</li>
				<hr /></div>";			
				 } 
?>
