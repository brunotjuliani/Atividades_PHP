<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$cep = "80060050";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

?>
