<?php
$stage = $_POST['stage'];
$date = $_POST['date'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];
$adress = $_POST['adress'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$mail = $_POST['mail'];
$formcontent=" From: $name \n Stage: $stage \n Date: $date \n Date de naissance: $birthdate \n Adresse: $adress \n Numéro de téléphone 1: $phone1 \n Numéro de téléphone 2: $phone2 \n Mail: $mail";
$recipient = "info@banc-public.be";
$subject = "Inscription aux stages";
$mailheader = "From: $mail \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Merci pour votre message!" . " -" . "<a href='contacts.html' style='text-decoration:none;font-family:'DIN Light';color:#e56605;'> Retour</a>";
?>
