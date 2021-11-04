<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pasta = "arquivos";

$permissao = "0775";
 
if (!is_dir($pasta)) {
    mkdir($pasta, $permissao);
    echo "Diretório criado com sucesso.";
}



?>
