<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "root", "", "dbphp");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;
}

$stmt = $conn-> prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

$stmt -> bind_param("ss", $login, $pass);

$login = "user";
$pass = "12354";
$stmt-> execute();

$login = "root";
$pass = "abcde";
$stmt-> execute();

?>