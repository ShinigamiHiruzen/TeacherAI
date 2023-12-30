<?php 

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "teachersia";

    try{
        $conn = new PDO("mysql:host={host}; dbname={$dbname}", $user, $password);
    }catch(PDOException $error){
        echo "Servidor instável no momento, tente novamente mais tarde!" . $error;
    }
?>