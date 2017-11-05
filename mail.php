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
        echo "<script type='text/javascript'>window.alert('Erro ao enviar email. Tente entrar em contato diretamente com email: alexandresx9@gmail.com.!');</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=index.php">';
     } else {
        echo "<script type='text/javascript'>window.alert('Email enviado com Sucesso!');</script>";
        echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=index.php">';
     }
?>