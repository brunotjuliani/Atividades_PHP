<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function ola($saudacao = "Olá", $texto = "mundo") {

    return "$saudacao $texto!";
}

echo ola() . "<br>";
echo ola("") . "<br>";
echo ola("Tchau", "Bruno") . "<br>";
echo ola("Isso é um","teste") . "<br>";


?>