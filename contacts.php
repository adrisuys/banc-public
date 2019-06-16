<?php
$name = $_POST['name'];
$object = $_POST['object'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$formcontent=" From: $name \n Object: $object \n Mail: $mail \n Message: $message";
$recipient = "info@banc-public.be";
$subject = "$object";
$mailheader = "From: $mail \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Merci pour votre message!" . " -" . "<a href='contacts.html' style='text-decoration:none;font-family:'DIN Light';color:#e56605;'> Retour</a>";
?>
