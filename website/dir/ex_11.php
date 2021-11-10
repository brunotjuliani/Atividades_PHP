<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dir1 = "pasta_teste";
$dir2 = "uploads";

if (!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {

    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}

rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename,
    $dir2 . DIRECTORY_SEPARATOR . $filename
);

echo "Arquivo movido com sucesso."

?>
