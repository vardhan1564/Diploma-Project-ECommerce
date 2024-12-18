<?php
/* watch the video for detailed instructions */
$to = "vardhnadheli1527@gmail.com";
$from = "opgaming722@gmail.com";
$message = "This is a text message\nNew line...";
$headers = "From: $from\n";
mail($to, '', $message, $headers);
?>