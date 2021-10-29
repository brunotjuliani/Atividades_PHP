<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new PDO("mysql:dbname=dbphp; host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios where idusuario = :ID");

$id = 5;
$stmt-> bindParam(":ID", $id);

$stmt-> execute();

echo "Ok! Dados apagados."
?>