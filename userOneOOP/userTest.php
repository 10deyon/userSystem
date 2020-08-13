<?php

include'db_conn.php';

class Test extends Dbh{

    public function getUsers(){
        $sql = "SELECT * FROM oneuser";
        $stmt = $this->connect()->query($sql);

        while($row=$stmt->fetch()){
            echo $row['userName'];
        }
    }
}