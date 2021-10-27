<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Início Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Início Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    ),
                    //Término Gerente de Vendas
                ),
            ),
            //Término Diretor Comercial
            //Início Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Início Gerente Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //Início Supervisor Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            ),
                            //Término Supervisor Pagamentos
                        ),
                    ),
                    //Término Gerente Contas a Pagar
                    //Início Gerente de Compras
                    array(
                        'nome_cargo' => "Gerente de Compras",
                        'subordinados' => array(
                            //Início Sueprvisor Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            ),
                            //Término Supervisor Suprimentos
                        ),
                    ),
                    //Término Gerente de Compras
                ),
            ),
        ),
    ),
);


function exibe($cargos){
    
    $html = '<ul>';

    foreach ($cargos as $cargo){
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";

    }

    $html .= '</ul>';

    return $html;
}


echo exibe($hierarquia);

?>