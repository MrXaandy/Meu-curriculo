<?php
    $nomeremetente = $_POST['nome'];
    $emailremetente = trim($_POST['email']);
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $mensagemHTML = '<strong>Formulário de Contato</strong>
    <p><b>Nome:</b> '.$nomeremetente.'
    <p><b>E-Mail:</b> '.$emailremetente.'
    <p><b>Assunto:</b> '.$assunto.'
    <p><b>Mensagem:</b> '.$mensagem.'</p>
    <hr>';
    require("class.phpmailer.php");
    require("class.smtp.php");
    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPDebug = 1; 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; 
    $mail->IsHTML(true);
    $mail->Username = "alexandresx9@gmail.com";
    $mail->Password = "freestepporra";
    $mail->SetFrom("alexandresx9@gmail.com");
    $mail->Subject = $assunto;
    $mail->Body = $mensagemHTML;
    $mail->AddAddress("alexandresx9@gmail.com");
    
     if(!$mail->Send()) {
        echo "<script type='javascript'>alert('Erro ao enviar email. Tente entrar em contato diretamente com email: alexandresx9@gmail.com.!');";
        echo "javascript:window.location='index.php';</script>";
     } else {
        echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
        echo "javascript:window.location='index.php';</script>";
     }
?>