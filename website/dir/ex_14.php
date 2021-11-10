<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_COOKIE["NOME_DO_COOKIE"])) {

    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    echo $obj->empresa;
}

?>
