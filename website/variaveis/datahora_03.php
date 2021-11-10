<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B"));


?>