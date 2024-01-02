<?php
$host = "localhost";
$username = "id21729485_eduardo";
$password = "Moonjuba@1234";
$database = "id21729485_teachersai";


    $connect = new mysqli($host, $username, $password, $database);
    // Resto do código de conexão...
 if ($connect->error) {
    die("Erro de conexão: " . $connect->error);
}
