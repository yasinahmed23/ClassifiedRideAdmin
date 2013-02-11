<?php
include("../dbConnector.php");
$connector = new DbConnector();


$AccountPayableEmail = trim(strtolower($_POST['AccountPayableEmail']));
$AccountPayableEmail = mysql_escape_string($AccountPayableEmail);

$query = "SELECT AccountPayableEmail FROM dealers WHERE AccountPayableEmail = '$AccountPayableEmail' LIMIT 1";
$result = $connector->query($query);
$num = mysql_num_rows($result);

echo $num;
mysql_close();
