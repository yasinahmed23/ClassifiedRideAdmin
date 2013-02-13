<?php

include '../Functions/ARFunctions.php';
require_once '../includes/db_config2.php';

$Cabidrequest="Turn On";
if ($Cabidrequest=="Turn On") {
TurnCabidOn();
}
else if ($Cabidrequest=="Turn Off") {
TurnCabidOff();
}

?>
