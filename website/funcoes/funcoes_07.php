<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function soma(int ...$valores) {

    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";

echo soma(50, 2);
echo "<br>";

echo soma(1.5, 1.5);
echo "<br>";

?>