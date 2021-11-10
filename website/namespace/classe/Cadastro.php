<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Cadastro {
    private $nome;
    private $email;
    private $senha;

    public function getNome():string {
        return $this->nome;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function getSenha():string {
        return $this->senha;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function __toString() {
        return json_encode(array(
            "nome" => $this->getNome(),
            "email" => $this->getEmail(),
            "senha" => $this->getSenha()
        ));
    }
}


?>