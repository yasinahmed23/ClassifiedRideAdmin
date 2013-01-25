<?php
$to = "classifiedridewebsite@gmail.com";
$subject = "New Employee Added";
$message = "Hello! This is a simple email message.";
$from = "classifiedridewebsite@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>
