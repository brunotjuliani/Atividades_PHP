<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Aqui criamos o nome da classe
class Carro {

    // Aqui definimos os atributos (Basicamente são variáveis), porém com um poder maior.
    private $modelo;
    private $motor;
    private $ano;

    // Aqui criamos um método (basicamente uma função que irá ser executada mais tarde).
    // Essa execução irá (palavra "get" colado com o nome da função, tem essa tarefa de...) pegar um valor
    public function getModelo() {
        // Como já estamos dentro da classe Carro, temos que utilizar o $this para não precisar repetir o nome da classe
        // Depois utilizamos a seta para acessar o atributo da classe.
        // Basicamente seria a mesma coisa que $Carro->modelo.
        return $this->modelo;
    // E então... retorna o conteúdo do atributo $modelo.
    }

    // Essa execução irá (palavra "set" colado com o nome da função, tem essa tarefa de...) definir um valor para o parâmetro que é passado na função.
    // Se o parâmetro for passado ex: Jetta GLI - GOL
    public function setModelo($modelo) {
        $this->modelo = $modelo;
        // O modelo(atributo depois da seta) da classe($this, Carro) será Jetta GLI - GOL (Valor que foi passado no parâmetro, $modelo)
    }

    // de maneira similar o :float define que o retorno dessa função será um valor DECIMAL
    public function getMotor():float {
        return $this->motor;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }

    // o :int define que o retorno dessa função será um valor INTEIRO
    public function getAno():int {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function exibir() {
        return array(
            // "chave do array"=>$classe->getAtributo()
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

// Cria um objeto ou instancia (Basicamente é o mesmo que dar um ctrl+c na classe Carro e alterar somente algumas coisas na cópia $gol)
$gol = new Carro();
// Valores definidos para o parâmetro
$gol -> setModelo("Gol GT");
$gol -> setMotor("1.6");
$gol -> setAno("2020");

// Exibe tudo que foi definido nos atributos e métodos
print_r($gol->exibir());

?>