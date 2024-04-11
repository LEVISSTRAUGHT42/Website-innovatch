<?php
$to = "tchetchelevis6@gmail.com"; // Votre adresse e-mail où vous recevrez les messages
$from = $_POST['email']; // L'adresse e-mail du formulaire
$first_name = $_POST['name']; // Prénom de l'expéditeur
$subject = $_POST['subject']; // Objet du message
$message = $_POST['message']; // Contenu du message

$headers = "From:" . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Envoi de l'e-mail
$mail1 = mail($to, $subject, $message, $headers);
$mail2 = mail($from, $subject, $message, $headers);

if ($mail1 && $mail2) {
    echo "success"; // Envoi réussi
} else {
    echo "error"; // Erreur lors de l'envoi
}
?>
