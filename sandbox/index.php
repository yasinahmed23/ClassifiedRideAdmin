<?php 
//require_once 'functions.php';
require_once 'dbConnector.php';

ini_set(‘display_errors’,1);
error_reporting(E_ALL|E_STRICT);

function GetPmt() {
$connector = new DbConnector();
if (!$connector) {
	die('Could not connect: ' . mysql_error());
}
$DealerName = "My Dealership";

$sql = "SELECT MthlyPmt FROM  dealers WHERE DealerName='$DealerName'";

$result = $connector->query($sql);
if (!$result) {
      die('Invalid query: ' . mysql_error());
      }

while ($row = mysql_fetch_array($result)) {
  echo $row[0];
}

$num = mysql_num_rows($result);
mysql_close();
}

GetPmt();
?>


