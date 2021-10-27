<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function salario() {

    return 946.00;
}

echo "José recebeu 3 salários: " . (salario()*3);

?>