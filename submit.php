<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["mensagem"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        // Constrói a mensagem de e-mail
        $to = "enzo.rgracindo@gmail.com"; // E-mail de destino
        $subject = "Mensagem de Contato"; // Assunto do e-mail
        $message = "Nome: $nome\n";
        $message .= "Email: $email\n";
        $message .= "Mensagem:\n$mensagem";

        // Envia o e-mail 
        mail($to, $subject, $message);

        // Redireciona de volta para a página de contato após o envio do e-mail
        header("Location: contato.html"); // Altere "contato.html" para o nome da sua página de contato
        exit();
    } else {
        // Se algum campo estiver faltando, redireciona de volta para a página de contato
        header("Location: contato.html"); // Altere "contato.html" para o nome da sua página de contato
        exit();
    }
} else {
    // Se o formulário não foi submetido, redireciona de volta para a página de contato
    header("Location: contato.html"); // Altere "contato.html" para o nome da sua página de contato
    exit();
}
?>