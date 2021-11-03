<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function error_handler($code, $message, $file, $line){

    echo json_encode(array(
        "code" => $code,
        "message" => $message,
        "file" => $file,
        "line" => $line
    ));
}

set_error_handler("error_handler");

$total =  100/0;

?>