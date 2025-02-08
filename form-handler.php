<?php

if($_SERVER[REQUEST_METHOD] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    //validação simples dos dados do formulário
    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        //destinatário do e-mail
        $to = "priscillabarbosa@outlook.com"; 

        //assunto do email
        $subject = "Novo contato de $nome";

        //corpo do email
        $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";

        //cabeçalhos do e-mail
        $headers = "From: $email";

        //envio do email
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar mensagem.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de requisição inválido.";
}