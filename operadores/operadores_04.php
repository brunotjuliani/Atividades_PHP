<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = 30;
$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a == $b);

echo "<br>";

var_dump($a === $b);

echo "<br>";

var_dump($a != $b);

echo "<br>";

var_dump($a <=> $b);

?>