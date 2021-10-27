<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
</form>

<?php

if (isset($_GET)) {

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    foreach($_GET as $key => $value) {
        echo "Nome do campo: " . $key;
        echo "Valor do campo: " . $value;
        echo "<hr>";
    }
}

?>