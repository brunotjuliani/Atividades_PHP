<?php

$data = [
    "nome" => "Hcode"
];

define('SEGREDO', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));


$openssl = openssl_encrypt(
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SEGREDO
);

var_dump($openssl, true);

$string = openssl_decrypt(
    $openssl,
    'AES-128-CBC',
    SECRET,
    0,
    SEGREDO);

var_dump(json_decode($string), true);

?>
