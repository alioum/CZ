<?php
//mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] );

$prenom = $_POST['first_name'];
$nom = $_POST['last_name'];
$email = $_POST['email'];
$tel = $_POST['phone'];
if(!isset($tel)){
  $tel = "0102030405";
}
$comment =   $_POST['comment'];
$qui =   $_POST['typeOfperson'];
$prospect = 1;


/*$adresse =" az";
$cp  = " az";
$ville = "za ";
$lieu= " az";
$prospect = 1;
$prenom ="za";
$nom ="z";
 $email   = "zz@yopmail.com" ;   
 $tel   = "";   
$comment = "";
$typeOfperson = "";
*/
//$sql = "INSERT INTO eleve VALUES('$email','$nom','$prenom','$adresse','$cp','$ville','$tel','$lieu',$prospect,'$qui',now()) ON DUPLICATE KEY UPDATE email ='$email';";

$sql = "INSERT INTO eleve (email,nom,prenom,adresse,cp,ville,tel,lieu,prospect,qui,message,date_creation) VALUES ('$email','$nom','$prenom','$adresse','$cp','$ville','$tel','$lieu',$prospect,'$qui','$comment',now())
ON DUPLICATE KEY UPDATE email='$email',nom='$nom',prenom='$prenom',adresse='$adresse',cp='$cp',ville='$ville',tel='$tel',lieu='$lieu',prospect=$prospect,qui='$qui',message='$comment',date_creation=now();";

include 'connexion.php';
$result = $mysqli->query($sql);
$mysqli->close();

$to = "coachzbraguitar@gmail.com";
$subject = "[CZ Contact] " . $prenom . " " . $nom ;
$message_html = ""
        . "<p> Nom: " . $prenom . "</p>" 
        ."<p> Prenom: " . $nom . "</p>"
        . "<p> Mail: " . $email . "</p>" 
        . "<p> Tel.: " . $tel . "</p>"
        . "<p> Type de personne: " . $qui . "</p>"
        .  "<p> Message: </p><p>" . $comment . "</p>"
        . "";



//=====Création du message.
$message = '
     <html>
      <head>
       <title>Prise de contact avec le Coach Zbra</title>
      </head>
      <body>
      <h1>Prise de contact</h1>
      '. $message_html.
      '</body>
     </html>
     ';

$message_eleve = '
     <html>
      <head>
        <title>Prise de contact avec le Coach Zbra</title>
      </head>
      <body>
      <h1>Merci pour ta prise de contact ! Je reviens vers toi dans les plus brefs délais.</h1>
      </br>
      <h4>Récapitulatif des informations envoyées au Coach:</h4>
      '. $message_html.
      '</body>
     </html>
     ';
$subject_eleve = "[CZ] Contact Coach Zbra";

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
     
          // En-têtes additionnels
     $headers_CZ = $headers .'To: Eleve <' . $email. '> \r\n';
     $headers_CZ .= 'From:' . $prenom . ' ' . $nom .' <'.$email.'>'.'\n'; // Expediteur
     $headers_CZ .= 'Delivered-to: '.$to."\n"; // Destinataire
     
     // En-têtes additionnels
     $headers_eleve = $headers .'To: Coach Zbra <' . $to. '> \r\n';
     $headers_eleve .= 'From: Coach Zbra <'.$to.'>'.'\n'; // Expediteur
     $headers_eleve .= 'Delivered-to: '.$email."\n"; // Destinataire
 
         
$retour = mail ($to,$subject,$message,$headers_CZ);
$retour = mail ($email,$subject_eleve,$message_eleve,$headers_eleve);
        
        
        
        


