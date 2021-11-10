<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = "images";

if(!is_dir($name)) {
    mkdir($name);
    echo "Diretório $name criado com sucesso.";
} else {
    rmdir($name);
    echo "Diretório $name já existe. Agora, foi removido.";
}

?>