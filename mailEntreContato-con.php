<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $contato = isset($_POST['contact']) ? $_POST['contact'] : '';

    $to = "lucas.nogueira@blackbeans.com.br";
    $subject = "Novo contato pelo formulário da Construtora";

    $message = "Nome: $name\n";
    $message .= "Telefone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Melhor Forma de Contato: $contato\n";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: http://devmaximoaldana.c09b59be.configr.cloud/obrigado-inc/");
        exit();
    } else {
        echo "Falha no envio do email.";
    }
}
?>