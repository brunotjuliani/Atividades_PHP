<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade) {
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade) {
        echo "O veículo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha " . $marcha;
    }
}


?>