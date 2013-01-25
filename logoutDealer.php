<?php
session_start();
unset($_SESSION['DealerUser']);
header( 'Location: Dealers.php' ) ;
?>

