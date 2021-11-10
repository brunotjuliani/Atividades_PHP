<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function test($callback) {

    //Processo lento

    $callback();
}

test(function(){
    
    echo "Terminou!";
});


?>