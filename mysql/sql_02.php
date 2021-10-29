<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "root", "", "dbphp");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;
}

$result = $conn-> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array()) {
    array_push($data, $row);
}

echo json_encode($data);

?>