<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 10;

function trocaValor(&$a) {

    $a = 50;

    return $a;
}

echo trocaValor($a) . "<br>";

echo $a . "<br>";


?>