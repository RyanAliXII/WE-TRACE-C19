<?php

    class Model {
    public $conn;

    private $servername = "localhost";
    private $username = "root";
    private $password = "password";
    private $dbName = "contact-tracing";
    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbName);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }


} 
?>