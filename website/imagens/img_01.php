<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0); // cor de fundo

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso PHP", $red);

imagepng($image);

imagedestroy($image);

?>