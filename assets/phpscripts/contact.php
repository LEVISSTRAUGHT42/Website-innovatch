<?php
$to = "tchetchelevis6@gmail.com"; // Votre adresse e-mail où vous recevrez les messages
$from = $_POST['email']; // L'adresse e-mail du formulaire
$first_name = $_POST['name']; // Prénom de l'expéditeur
$subject = $_POST['subject']; // Objet du message
$message = $_POST['message']; // Contenu du message

// Configurer les paramètres du serveur SMTP de Mailtrap
$smtp_server = "smtp.mailtrap.io";
$smtp_port = 2525;
$smtp_username = "emmanuel";
$smtp_password = "Bac2020delevis";

$headers = "From:" . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Configurer l'envoi d'e-mail via SMTP
ini_set("SMTP", $smtp_server);
ini_set("smtp_port", $smtp_port);
ini_set("smtp_username", $smtp_username);
ini_set("smtp_password", $smtp_password);

// Envoi de l'e-mail
$mail1 = mail($to, $subject, $message, $headers);
$mail2 = mail($from, $subject, $message, $headers);

if ($mail1 && $mail2) {
    echo "email bien envoyé"; // Envoi réussi
} else {
    echo "echec de l'envoie"; // Erreur lors de l'envoi
}
?>
