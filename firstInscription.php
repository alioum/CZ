<?php



/*$email = "zz@zz.zz";
$lieu = "Chez CZ";
$frmname = "regularInscription";*/



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




    /*$email = "coachzbra@yopmail.com";
    $nom = "a";
    $prenom = "a";
    $adresse = "a";
    $cp = "a";
    $ville = "a";
    $tel = "a";
    $lieu = "a";
    $comment =  "a";
    $prospect = 0;*/


$sql = "INSERT INTO eleve VALUES('$email','$nom','$prenom','$adresse','$cp','$ville','$tel','$lieu',$prospect,now()) ON DUPLICATE KEY UPDATE email ='$email';";

include 'connexion.php';
$result = $mysqli->query($sql);

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
     $header = "From: [CZ CONTACT FORM]";
 
         
$retour = mail ($to,$subject,$message,$headers);
echo $retour;        


