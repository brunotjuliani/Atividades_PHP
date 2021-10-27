<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$fn = function($a){

    var_dump($a);
};

$fn("Oi");


?>