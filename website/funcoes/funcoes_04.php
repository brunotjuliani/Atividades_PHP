<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function ola() {
    $argumentos = func_get_args();
    return $argumentos;
}

ola("Bom dia!");
var_dump(ola("Bom dia!", 10));

?>