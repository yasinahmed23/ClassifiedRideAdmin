<?php
include("../dbConnector.php");
$connector = new DbConnector();


$DealerUserName = trim(strtolower($_POST['DealerUserName']));
$DealerUserName = mysql_escape_string($DealerUserName);

$query = "SELECT DealerUserName FROM dealers WHERE DealerUserName = '$DealerUserName' LIMIT 1";
$result = $connector->query($query);
$num = mysql_num_rows($result);

echo $num;
mysql_close();
