<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pessoa = array(
    'nome' => 'Joao',
    'idade' => 20
);

foreach ($pessoa as $value) {
    
    if (gettype($value) === 'integer') $value += 10;

    echo $value.'<br>';
}


print_r($pessoa);

?>