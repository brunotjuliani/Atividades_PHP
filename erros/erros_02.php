<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function trataNome($name){

    if (!$name) {
        throw new Exception ("Nenhum nome foi informado. <br>", 1);
    }

    echo ucfirst($name) . "<br>";
}

try {
    trataNome("Joao");
    trataNome("");

} catch(Exception $e) {
    echo $e->getMessage();

} finally {
    echo "Executou o bloco Try.";
}

?>