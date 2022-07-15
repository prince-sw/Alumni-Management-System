<?php

class DBConnect{
private $servername = "localhost"; //To be accessed only from inside the class.
private $username = "csb53";
private $password = "1234";
private $databaseName = "ourdb";

public $conn="";

public function __construct()
{
    try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->databaseName", $this->username, $this->password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
}


}
?>
