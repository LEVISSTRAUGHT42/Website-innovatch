<?php
//this is your Email address
//kinldy update your email here
$to = "levi.tchetche@teambi.ci";
// $from = "tchetchelevis6@gmail.com";
//this is the sender's Email address
//this is firt name
// $first_name = $_POST['name'];
//this is last name
// $last_name = $_POST['name'];
//this is subject
$subject = "mail test levi";
//this is message body
// $message = "Message " . $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
$message = "Bonjour pour un test";

// $headers = "From:" . $from . "\r\n" .
//     "Reply-To:" . $from . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();
$headers = "Content-Type: text/plain; charset=utf-8\r\n";

$headers .= "From: tchetchelevis6@gmail.com\r\n";
// mail($from, $subject, $message, $headers2);
mail($to, $subject, $message, $headers);

if (mail($to, $subject, $message, $headers)) {
    echo 'email bien envoyé à ' . $to;
} else {
    echo 'erreur ';
}
?>
