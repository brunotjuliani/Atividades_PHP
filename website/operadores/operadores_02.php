<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$valorTotal = 0;
echo $valorTotal . "<br/>";

$valorTotal += 100;
echo $valorTotal . "<br/>";

$valorTotal += 25;
echo $valorTotal . "<br/>";

$valorTotal -= 50;
echo $valorTotal . "<br/>";

$valorTotal -= 200;
echo $valorTotal . "<br/>";

$valorTotal *= .9;
echo $valorTotal . "<br/>";

?>