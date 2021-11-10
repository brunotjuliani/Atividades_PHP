<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $file = fopen("log.txt", "w+"); // SOBRESCREVE
$file = fopen("log.txt", "a+"); // APPEND


fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo atualizado com sucesso!"

?>