<?php
$to = "ruchirjadhav29@gmail.com";
$subject = "Test Password Reset";
$txt = "This is a test to see if spoofing works";
$headers = "From: Gmailsupport.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>