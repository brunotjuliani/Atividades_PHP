<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$file = fopen("teste.txt", "w+");
fclose($file);

unlink("teste.txt");

echo "Arquivo removido com sucesso."

?>