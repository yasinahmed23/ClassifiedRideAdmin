<?php
include("../Functions/dbConnector.php");
$connector = new DbConnector();

$EmplUserName = trim(strtolower($_POST['EmplUserName']));
$EmplUserName = mysql_escape_string($EmplUserName);

$query = "SELECT EmplUserName FROM employees WHERE EmplUserName = '$EmplUserName' LIMIT 1";
$result = $connector->query($query);
$num = mysql_num_rows($result);

echo $num;
mysql_close();
