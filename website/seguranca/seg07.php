<?php

session_start();

echo session_id() . "<br>";

// Após verificar login e senha - reiniciar id da sessão
session_destroy();

session_start();

session_regenerate_id();

echo session_id() . "<br>";

?>
