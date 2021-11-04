<form method="POST">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['busca'])) {
    echo strip_tags($_POST['busca']);
    echo htmlentities($_POST['busca']);
}


?>
