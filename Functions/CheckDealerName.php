<?php
include("../Functions/dbConnector.php");
$connector = new DbConnector();

$DealerName = trim(strtolower($_POST['DealerName']));
$DealerName = mysql_escape_string($DealerName);
$query = "SELECT DealerName FROM dealers WHERE DealerName = '$DealerName' LIMIT 1";
$result = $connector->query($query);
$num = mysql_num_rows($result);

echo $num;
mysql_close();
