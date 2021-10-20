<?php

function sendMail($to) {
    $subject = 'Introduction';

    $message = "Hello my name is Kim Chan\r\nI come from Hoi An old town";
    $message = wordwrap($message, 70, "\r\n");

    $headers = 'From: chantran.24hdev@gmail.com' . "\r\n" .
    'Reply-To: chantran.24hdev@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>