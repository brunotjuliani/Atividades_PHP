<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150,  "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350,  "Bruno Juliani", $titleColor);
imagestring($image, 3, 440, 370,  utf8_decode("Concluído em ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);


?>