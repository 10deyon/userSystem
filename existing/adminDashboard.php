<?php
session_start();
include_once("db_conn.php");

if(isset($_POST['login'])){
    $row = 0;

    $sqlLogin = mysqli_query($conn, "SELECT * FROM userdata");

    //checking if the username is available in the table
    $row = mysqli_fetch_array($sqlLogin);
    if ($row > 0){
        echo 'This is working' . ' ' .$row['id']. $row['userEmail'];
    } else{
        echo "Incorrect Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" >
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->

    <!-- Latest compiled JavaScript -->
    <script src="../bootstrap/js/bootstrap.min.js"> </script><!-- jQuery library -->

    <script src="../bootstrap/js/jquery.min.js"> </script>
    <!-- <script src="bootstrap/js/bootstrap.js"> </script> -->


</head>
<body>

<div class="container">
    <h3>WELCOME TO USER MANAGEMENT SYSTEM</h3>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">

        </ul>
    </div>
</div>