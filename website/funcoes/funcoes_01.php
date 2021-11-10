<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function ola() {

    return "Olá world";
}

echo ola() . "<br>";
echo strlen( ola());

?>