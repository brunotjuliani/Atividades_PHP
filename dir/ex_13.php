<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$data = array(
    "empresa" => "Empresa 01"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>
