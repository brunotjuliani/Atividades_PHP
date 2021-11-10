<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dt = new DateTime();

echo $dt -> format("d/m/Y H:i:s");

echo "<br>";

$periodo = new DateInterval("P15D");

$dt -> add($periodo);

echo $dt -> format("d/m/Y H:i:s");

?>