<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "teachersai";


    $connect = new mysqli($host, $username, $password, $database);
    // Resto do código de conexão...
 if ($connect->error) {
    die("Erro de conexão: " . $connect->error);
}
