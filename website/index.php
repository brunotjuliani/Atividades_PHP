<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function (){
    echo "Home Page";
});

$app->get('/datahora', function() {
    echo json_encode(array(
        'datahora'=>date("Y-m-d H:i:s"),
        'time'=>time()
    ));
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();


?>