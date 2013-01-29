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
		ORDER BY employeeID ASC');

		$val = $_GET['lastEmployee'];
		$rowNumber=$val;
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
			$rowNumber++;
			echo "
			<div class='postedEmployee' employeeID=\"$data->employeeID \">
				<table cellpadding='0' cellspacing='0' border='0' width='750' align='center'>
					<tr valign='top'>
					<td colspan='7' align='center'><hr /></td>
				</tr>
				<tr valign='top'>				
					<td align='center' width='22'><li>"."$rowNumber </li></td>
					<td align='center' width='256'><li><p><a href='mailto:$EmplEmail'>" . "$EmplFirstName $EmplLastName</a></p></li></td>
					<td align='center' width='236'><li>" . "$EmplCity $EmplState </li></td>		
					<td align='center' width='236'><li>";if ($pic == null || $pic == "") {
							printf("<img src='/images/No_Image_Available.gif' width='100'>");
						}
						else {
							printf("<img src='/uploads/$pic' width='100'>");
						};echo "</li></td>
				</tr>
				</table>
			</div>";			
		} 
?>
