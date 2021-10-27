<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ts = strtotime("2011-05-10");

$ts_now = strtotime("now");

$ts_next = strtotime("+1 day");



echo date("l, d/m/Y", $ts) . "<br>";

echo date("l, d/m/Y", $ts_now) . "<br>";

echo date("l, d/m/Y", $ts_next) . "<br>";


?>