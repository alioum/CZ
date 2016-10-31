<?php

/*
$to = "coachzbraguitar@gmail.com";
$email = $_POST['email'];
$lieu = $_POST['lieu'];
$creneau = $_POST['creneau'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$comment = $_POST['comment'];
$prospect = 1;
$qui = "";

*/
    $to = "coachzbraguitar@gmail.com";

    $email = "coachzbra@yopmail.com";
    $nom = "a";
    $prenom = "a";
    $adresse = "a";
    $cp = "a";
    $ville = "a";
    $tel = "a";
    $lieu = "a";
    $comment =  "a";
    $prospect = 0;
    $qui = "Eleve";


$sql = "INSERT INTO eleve VALUES('$email','$nom','$prenom','$adresse','$cp','$ville','$tel','$lieu',$prospect,'$qui',now()) ON DUPLICATE KEY UPDATE email ='$email';";
include 'connexion.php';
$result = $mysqli->query($sql);
$mysqli->close();

$subject = "[CZ NOUVEL ELEVE - COURS] " . $nom . " " . $prenom ;


$message_html = "<p> Nom: " . $nom . "</p>" 
        ."<p> Prénom: " . $prenom . "</p>"
        ."<p> Adresse: " . $adresse . "</p>"
        ."<p> CP: " . $cp . "</p>"
        ."<p> Ville: " . $ville . "</p>"
        . "<p> Mail: " . $email . "</p>" 
        . "<p> Tel.: " . $tel . "</p>"
        . "<p> Lieu: " . $lieu . "</p>"
        .  "<p> Message: </p><p>" . $comment . "</p>";


//=====Création du message.
$message_CZ = '
     <html>
      <head>
        <title>Inscription au cours du Coach Zbra</title>
      </head>
      <body>
      <h1>Inscription nouvel éleve Zbra ! </h1>
      '. $message_html.
      '</body>
     </html>
     ';

/*Message de confirmation eleves*/
$subject_eleve = "[CZ] Récapitulatif inscription";

$message_eleve = '
     <html>
      <head>
        <title>Inscription au cours du Coach Zbra</title>
      </head>
      <body>
      <h1>Merci pour ton inscription ! Je reveiens vers toi dans les plus brefs délais.</h1>
      </br>
      <h4>Récapitulatif des informations envoyées au Coach:</h4>
      '. $message_html.
      '</body>
     </html>
     ';

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

     // En-têtes additionnels
    // $headers_CZ = $headers . 'To: <' . $to. "> \r\n";
     //$headers_eleve = $headers . 'To: <' . $email. "> \r\n";
         
$retour = mail($to,$subject,$message_CZ,$headers_CZ);
$retour = mail($email,$subject_eleve,$message_eleve,$headers_eleve);
//  echo $retour;