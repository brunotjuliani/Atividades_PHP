<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql -> select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios)

// // CARREGA UM USUARIO
// $user = new Usuario();
// $user -> loadbyId(3);
// echo $user

// // CARREGA UMA LISTA DE USUARIOS
// $lista = Usuario::getList();
// echo json_encode($lista);

// // CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
// $busca = Usuario::search("se");
// echo json_encode($busca);

// // VALIDA UM USUARIO COM LOGIN E SENHA
// $usuario = new Usuario();
// $usuario->login("root", "abcde");
// echo $usuario;

// // INSERE UM NOVO USUARIO
// $aluno = new Usuario("aluno3", "12345");
// $aluno->inserir();
// echo $aluno;

// // ATUALIZANDO DADOS DE UM USUARIO
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->atualizar("professor", "bola1");
// echo $usuario;

// DELETANDO UM USUARIO
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->deletar();
echo $usuario;

?>