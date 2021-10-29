<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function($nomeClasse){

    $nomeClasse = str_replace('\\', DIRECTORY_SEPARATOR, $nomeClasse);

    $dirClasse = "classe";
    $filename = $dirClasse . DIRECTORY_SEPARATOR . $nomeClasse . ".php";

    if (file_exists($filename)) {
        require_once($filename);
    }
});


?>