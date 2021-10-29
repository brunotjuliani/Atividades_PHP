<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Nome Ficticio");
$cad->setEmail("nome@nome.com");
$cad->setSenha("123456");

echo $cad->registrarVenda();

?>