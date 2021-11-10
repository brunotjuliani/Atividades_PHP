<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!is_dir("pasta_teste")) mkdir("pasta_teste");

foreach (scandir("pasta_teste") as $item) {
    if (!in_array($item, array(".", ".."))) {

        unlink("pasta_teste/" . $item);
    }
}

echo "ok."

?>