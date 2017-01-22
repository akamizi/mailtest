
<?php


$mail_boundary = "=_NextPart_" . md5(uniqid(time()));

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n email: $email \n Message: $message";
$recipient = "giottoli.andrea@gmail.com";
$subject = "Add Your Subject Here";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

$headers = "From: $sender\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/alternative;\n\tboundary=\"$mail_boundary\"\n";
$headers .= "X-Mailer: PHP " . phpversion();


?>



