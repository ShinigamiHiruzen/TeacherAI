<?php

require_once "connect.php";

$id = filter_input(INPUT_GET, 'id');

//prepare
$stmt = $conn->prepare("DELETE FROM teachersia WHERE id = :id");

//trocar
$stmt->bindValue(':id', $id);

//execute
$stmt->execute();

//colocar o header abaixo
?>