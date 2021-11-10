<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$filename = "images/arara.jpeg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link Para Imagem</a>

<img src="<?=$base64encode?>">