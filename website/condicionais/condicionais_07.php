<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$condicao = true;

while ($condicao) {
    $numero = rand(1,10);

    if ($numero === 3) {
        echo "TRÊS!!!";
        $condicao = false;
    }
    
    echo $numero . "<br>";
}

?>