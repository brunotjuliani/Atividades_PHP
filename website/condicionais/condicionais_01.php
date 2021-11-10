<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$idadePergunta = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($idadePergunta < $idadeCrianca) {
    echo "Criança";
} else if ($idadePergunta < $idadeMaior) {
    echo "Adolescente";
} else if ($idadePergunta < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

echo ($idadePergunta < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";

?>