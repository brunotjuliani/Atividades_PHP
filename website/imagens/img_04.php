<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

list($old_width, $old_heigth) = getimagesize($file);

$new_width = 256;
$new_heigth = 256;

$new_image = imagecreatetruecolor($new_width, $new_heigth);

$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_heigth, $old_width, $old_heigth);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>