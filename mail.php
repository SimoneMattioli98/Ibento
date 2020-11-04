<?php
$to_email = "lucamarini1998@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: sender\'s email";

mail($to_email, $subject, $body, $headers);

?>