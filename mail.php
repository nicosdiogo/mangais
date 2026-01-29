<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Construir corpo do email
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Telefone: $telefone\n";
    $corpo_email .= "Assunto: $assunto\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Email de destino
    $destinatario = "geral@itsall4u.ao"; // Insira o email para o qual deseja enviar os dados

    // Assunto do email
    $assunto_email = "Novo contato - $assunto";

    // Enviar email
    mail($destinatario, $assunto_email, $corpo_email);

    // Redirecionar de volta para a página do formulário
    header('Location: ../index.html');
    exit;
}
?>
