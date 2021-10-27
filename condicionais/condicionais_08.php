<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$total = 100;
$desconto = 0.9;

do {
    $total *= $desconto;
} while ($total > 100);

echo $total . "<br>";

?>