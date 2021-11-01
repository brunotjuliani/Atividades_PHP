<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Sql extends PDO {

    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp", "root", "");
    }

    private function setParams($statement, $parameters = array()){
        foreach ($parameters as $key => $value){
            $this->setParam($key, $value);
        }
    }

    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    public function execQuery($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()):array{
        $stmt = $this->execQuery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>