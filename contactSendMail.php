<?php
//mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] );


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment =   $_POST['comment'];
$typeOfperson =   $_POST['typeOfperson'];
      
/*$first_name ="";
$last_name ="";
 $email   = "" ;   
 $phone   = "";   
$comment = "";*/

$to = "coachzbraguitar@gmail.com";
$subject = "[CZ Contact] " . $first_name . " " . $last_name ;
$message_html = ""
        . "<p> Nom: " . $first_name . "</p>" 
        ."<p> Prenom: " . $last_name . "</p>"
        . "<p> Mail: " . $email . "</p>" 
        . "<p> Tel.: " . $phone . "</p>"
        . "<p> Type de personne: " . $typeOfperson . "</p>"
        .  "<p> Message: </p><p>" . $comment . "</p>"
        . "";



//=====Création du message.
$message = '
     <html>
      <head>
       <title>Calendrier des anniversaires pour Août</title>
      </head>
      <body>
      '. $message_html.
      '</body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

     // En-têtes additionnels
     $headers .= 'To: <' . $to. "> \r\n";
     $header = "From: [CZ CONTACT FORM]".$passage_ligne;
 
         
$retour = mail ($to,$subject,$message,$headers);
echo $retour;
        
        
        
        


