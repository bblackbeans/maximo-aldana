<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $empresa = isset($_POST['nome-empresa']) ? $_POST['nome-empresa'] : '';
    $cnpj = isset($_POST['CNPJ']) ? $_POST['CNPJ'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';
    $contato = isset($_POST['contact']) ? $_POST['contact'] : '';

    $to = "lucas.nogueira@blackbeans.com.br";
    $subject = "Novo contato - Orce Sua Obra Construtora";

    $message = "Nome: $nome\n";
    $message .= "Empresa: $empresa\n";
    $message .= "CNPJ: $cnpj\n";
    $message .= "Telefone: $telefone\n";
    $message .= "Email: $email\n";
    $message .= "Melhor Forma de Contato: $contato\n";
    $message .= "Mensagem: $mensagem\n";

    $headers = "From: $email";

    // Boundary
    $boundary = md5(time());

    // Headers for file attachment
    $headers .= "\r\nMIME-Version: 1.0\r\n" .
                "Content-Type: multipart/mixed; boundary=\"$boundary\"";

    // Message body
    $emailMessage = "--$boundary\r\n";
    $emailMessage .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $emailMessage .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $emailMessage .= $message . "\r\n\r\n";

    // Handle file attachments
    for ($i = 0; $i < count($_FILES['file-upload']['name']); $i++) {
        if ($_FILES['file-upload']['error'][$i] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['file-upload']['tmp_name'][$i];
            $fileName = $_FILES['file-upload']['name'][$i];
            $fileType = $_FILES['file-upload']['type'][$i];

            $fileContent = chunk_split(base64_encode(file_get_contents($fileTmpPath)));

            $emailMessage .= "--$boundary\r\n";
            $emailMessage .= "Content-Type: $fileType; name=\"$fileName\"\r\n";
            $emailMessage .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n";
            $emailMessage .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $emailMessage .= $fileContent . "\r\n\r\n";
        }
    }

    $emailMessage .= "--$boundary--";

    if (mail($to, $subject, $emailMessage, $headers)) {
        header("Location: http://devmaximoaldana.c09b59be.configr.cloud/obrigado-inc/");
        exit;
    } else {
        echo "Falha no envio do email.";
    }
}
?>
