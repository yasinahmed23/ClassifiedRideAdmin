<?php

class dbh extends mysqli {
    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
    }
}

$db = new dbh('ClassifiedRideAd.db.10325553.hostedresource.com', 'ClassifiedRideAd', 'Fernando1!', 'ClassifiedRideAd');

echo 'Success... ' . $db->host_info . "\n";

$db->close();
?>
