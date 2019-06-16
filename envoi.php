<?php 
$nom=$HTTP_POST_VARS['name']; 
$mail=$HTTP_POST_VARS['object']; 
$objet=$HTTP_POST_VARS['mail']; 
$message=$HTTP_POST_VARS['message']; 

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $name <$mail>\r\nReply-to : $name <$mail>\nX-Mailer:PHP"; 

$subject="$object"; 
$destinataire="adrien.suys@gmail.com"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé<br>"; 
} else { 
echo "Une erreur s'est produite"; 
} 
?>