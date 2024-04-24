<?php
    /*  
        Template name    : Technoit - IT Solutions & Business Services Multipurpose Responsive Website Template
        Author           : ZRTHEMES
        Version          : 1.0
        File Description : Contact PHP file of the template
    */
    //this is your Email address
    //kinldy update your email here
    $to = "info@teambi.ci"; 
    $from = $_POST['email']; 
    //this is the sender's Email address
    //this is firt name
    $first_name = $_POST['name'];
    //this is last name
    $last_name = $_POST['name'];
    //this is subject
    $subject = $_POST['subject'];
    //this is message body
    $message = $_POST['message'];

    $headers = "From:" . $from . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject,$message,$headers2); 
?>