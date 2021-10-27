<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$resultado = 10 + 3 / 2;

$resultado2 = (10 + 3) / 2;

$resultado3 = (10+3)/2 > 5 && 10 + 5 < 3;

var_dump($resultado3);

?>