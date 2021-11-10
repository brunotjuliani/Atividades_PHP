<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Marina","idade":40}]';

$dados = json_decode($json, true);

var_dump($dados);

?>