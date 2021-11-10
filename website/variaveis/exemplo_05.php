<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$nome = "Glaucio";

function teste() {

    global $nome;
    echo $nome;

}

function teste2() {

    $nome = "João";

    echo $nome." agora no teste2";

}

teste();
teste2();

function setMessage() {
    global $message;
    $message = 'Hello World';
}
setMessage();
echo $message;


?>