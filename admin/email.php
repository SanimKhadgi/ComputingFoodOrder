<?php   


$to = "keshav.magar906@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: keshav.magar906@gmail.com";

mail($to,$subject,$txt,$headers);



 ?>