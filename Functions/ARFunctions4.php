
<?php
include("dbConnector2.php");

//query
$sql = 'SELECT COUNT(transactions.TransactionID, transactions.DealerName, dealers.Program as category)
	FROM transactions
	INNER JOIN dealers ON dealers.DealerID = transactions.DealerID
	AND dealers.Program = :program';

$stmt = $db_conn->prepare($sql);

//$stmt ->bindValue(':DealerID', '1');
$stmt ->bindParam(':program', $category);

$category = '798';
$stmt ->execute();

$Program798 = $stmt->fetchAll();
$num_rows = count($Program798);
var_dump($num_rows);
echo "<strong>transactions found with the $" . $category . " Program<br /><br /></strong>";
//print_r($Program798[0]);

for ($key_Number = 0; $key_Number < 7; $key_Number++) {
	print_r($Program798[$key_Number]);}
?>
