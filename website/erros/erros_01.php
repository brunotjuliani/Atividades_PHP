<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {

    throw new Exception("Houve um erro.", 400);

} catch (Exception $e) {

    echo json_encode(array(
        "message" => $e->getMessage(),
        "line" => $e->getLine(),
        "file" => $e->getFile(),
        "code" => $e->getCode()
    ));

}

?>