<?php

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$arquivo = "

<html>
    <p><b>Nome: </b>$nome</p>
    <p><b>E-mail: </b>$email</p>
    <p><b>Telefone: </b>$telefone</p>
    <p><b>Mensagem: </b>$mensagem</p>
    <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
</html>  

";

$destino = "eduardoandradebomfimjr@gmail.com";
$assunto = "Contato pelo Site";

$Headers      = "MIME-Version: 1.1\n";
$Headers     .= "Content-type: text/html; charset=utf-8\n";
$Headers     .= "Reply-to: $email\n";

//Enviar
mail($destino, $assunto, $arquivo, $headers);
?>
