<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = (isset($_GET["id"])) ? $_GET["id"]:2;

// if (!is_numeric($id)) {

//     exit("Forma de ID inválido");
// }

if (!is_numeric($id) || strlen($id) > 5) {
    exit("Forma de ID inválido - 2");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

    echo $resultado->deslogin . "<br>";
}

?>
