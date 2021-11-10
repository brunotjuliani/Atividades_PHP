<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Pessoa {

    public $nome; //Atributo

    public function falar(){ //Método

        return "O meu nome é " . $this->nome; //Relaciona atributo declarado dentro de um método
    }
}

$bruno = new Pessoa();
$bruno->nome = "Bruno Henrique";

echo $bruno->falar();

?>