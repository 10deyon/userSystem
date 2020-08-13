<?php

class Dbh{

    private $hostname = "localhost";
    private $username= "root";
    private $password = "";
    private $db_name = "usermanagementsystem";

    protected function connect(){
        // Create connection
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->db_name);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "Connected successfully";
        return $conn;

        #Object Oriented connection close
        #$conn->close();

    }
}
