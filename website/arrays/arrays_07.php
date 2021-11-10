<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'teste'
]);

print_r(BANCO_DE_DADOS);

?>