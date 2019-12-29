<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'marcombes.solutions@gmail.com'; 
$email_subject = "Contact Site Internet:  $name";
$email_body = "Message depuis formulaire.\n\n"."Détails:\n\nName: $name\n\nEmail: $email_address\n\nTéléphone: $phone\n\nMessage:\n$message";
$headers = "From: pas-de-reponse@piano-arezzo.fr\n"; 
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>