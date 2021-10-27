<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = "joao rangel";

echo strtoupper($nome);
echo "<br>";
echo strtolower($nome);
echo "<br>";
echo ucwords($nome);
echo "<br>";
echo ucfirst($nome);
echo "<br>";


$empresa = "Hcode";
$empresa = str_replace("o","0", $empresa);
echo $empresa
echo "<br>";

$frase = "A repetição é a mãe da retenção.";
palavra = "mãe";
$q = strpos($frase, $palavra);
var_dump($q);
echo "<br>";

$texto = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br>";
var_dump($texto);

?>