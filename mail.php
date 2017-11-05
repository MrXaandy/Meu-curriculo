<?php
    require("class.phpmailer.php");
    require("class.smtp.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->Host     = "smtp.gmail.com"; // SMTP server
    $mail->From     = "alexandresx9@gmail.com";
    $mail->AddAddress("alexandresx9@mail.com");
    $mail->Subject  = "First PHPMailer Message";
    $mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
    $mail->WordWrap = 50;
    if(!$mail->Send()) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    }else {
        echo 'Message has been sent.';
    }
?>