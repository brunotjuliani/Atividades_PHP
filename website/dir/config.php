<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function($class_name){

    $filename = "classes" . DIRECTORY_SEPARATOR . $class_name . ".php";
    
    if(file_exists(($filename))) {
        require_once($filename);
    }
});

?>