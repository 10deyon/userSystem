<?php

$hostname = "localhost";
$username= "root";
$password = "";
$db_name = "usermanagementsystem";

////Server name
//define ('DB_SERVER', 'localhost');
//
////Server user name
//define ('DB_USERNAME', 'root');
//
////Server password
//define ('DB_PASSWORD', '');
//
////Database name
//define ('DB_NAME', 'attendance_system');

//Create a database connection
$conn = new mysqli($hostname, $username, $password, $db_name);

//Check Database Connection for possible error
if(!$conn){
        die("Database Connection failed: " . mysqli_connect_error());
    }
