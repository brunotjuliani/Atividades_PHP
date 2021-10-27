<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Documento {

    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($n) {
        $this->numero = $n;
    }
}

class CPF extends Documento {

    public function validar():bool {
        $numeroCPF = $this->getNumero();
        //VALIDACAO DO CPF
        return true;
    }
}


$doc = new CPF();

$doc->setNumero("58975614894");
var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();



?>