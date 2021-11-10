<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$filename = "usuarios.csv";

if (file_exists($filename)) {

    $file = fopen($filename, "r");
    $headers = explode(",", fgets($file));
    $data = array();

    while($row = fgets($file)) {

        $dados = (explode(",", $row));
        $linha = array();

        for ($i = 0; $i < count($headers); $i++) {

            $linha[$headers[$i]] = $dados[$i];
        }

        array_push($data, $linha);
    }

    fclose($file);
}

echo json_encode($data);

?>