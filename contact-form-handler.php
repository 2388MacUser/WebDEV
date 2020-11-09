// email form "contact me page"

<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'cesaretto.diego@hotmail.it';
    $email_subject = "Nuova Submission dal sito";
    $email_body = "User Name: $name.\n".
                     "User Email: $email.\n".
                        "User Phone: $phone.\n".
                            "User Message: $message.\n";
    $to = "d.cesaretto@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Replay to: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contacts.html");


?>