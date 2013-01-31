<?php
$var1 = "01/08/2013";

$month = substr($var1, 0, 2);
$day = substr($var1, 3, 2);
$year = substr($var1, 6, 4);
$sep = "-";
echo $var1 . "<br />";
echo $newdate = $year . $sep . $month . $sep . $day;
?>
