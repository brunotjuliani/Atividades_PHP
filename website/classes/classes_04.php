<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct(){
        var_dump("DESTRUIR");
    }

    public function __toString(){
        return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
    }

}


$meuEndereco = new Endereco("Rua Nilo Cairo", "150", "Curitiba");

// var_dump($meuEndereco);

// unset($meuEndereco);

echo $meuEndereco;


?>