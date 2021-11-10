<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Marina',
    'idade' => 40
));

echo json_encode($pessoas);

?>