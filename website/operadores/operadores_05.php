<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;



?>