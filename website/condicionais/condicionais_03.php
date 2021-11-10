<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

for($i = 0; $i < 500; $i+=5) {

    if ($i > 100 && $i < 400) continue;

    if ($i === 450) break;

    echo $i . "<br>";

}

?>