<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_id('dch99q7r0fa69ckq8hb511n69d');

require_once('config.php');

echo session_id() . "<br>";

session_regenerate_id();

echo session_id() . "<br>";

var_dump($_SESSION);

?>