<body>
<?php
$multiDimArray = []; # Turn the form array into a matrix
for ($i = 0; $i < count($_POST['order']); $i++) {
        $multiDimArray[] = [];
    foreach ($_POST['order'][$i] as $key=>$value) {
        if ($i == 0) {
            $multiDimArray[$i][] = $key;
        }
        $multiDimArray[$i][] = $value;
    }
}

$table = new Table($multiDimArray); # Create and draw the table
$table->draw();
?>
</body>
