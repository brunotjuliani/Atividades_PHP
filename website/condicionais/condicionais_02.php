<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$diaDaSemana = date("w");

switch ($diaDaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda";
        break;
    case 2:
        echo "Terça";
        break;
    case 3:
        echo "Quarta";
        break;
    case 4:
        echo "Quinta";
        break;
    case 5:
        echo "Sexta";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Data inválida";
        break;

}

?>