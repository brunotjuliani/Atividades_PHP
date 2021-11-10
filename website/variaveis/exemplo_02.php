<?php

$anoNascimento = 1990;

//Linha comentada

$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;
echo "<br/>";

exit;

/* Abre bloco comentado

Fecha bloco comentado */

echo $nome1;
echo "<br/>";

//unset($nome1);


if (isset($nome1)) {
    echo $nome1;
    echo "<br/>";
}

?>
