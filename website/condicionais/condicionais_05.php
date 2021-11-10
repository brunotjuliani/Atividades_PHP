<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$meses = array (
    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {

    echo "Indice: " . $index . "<br>";
    echo "O mês é: " . $mes . "<br><br>";

}

?>