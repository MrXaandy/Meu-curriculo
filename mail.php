<?php
    ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "alexandresx9@gmail.com");

    $message = "The mail message was sent with the following mail setting:\r\nSMTP = aspmx.l.google.com\r\nsmtp_port = 25\r\nsendmail_from = alexandresx9@address.com";

    $headers = "From: alexandresx9@gmail.com";


    mail("Sending@provider.com", "Testing", $message, $headers);
    echo "Check your email now....<BR/>";
?>