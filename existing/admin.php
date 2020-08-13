<?php
session_start();
include_once("db_conn.php");

//    if (isset($_SESSION['id']) != ""){
//        header("Location: home.php");
//    }

if(isset($_POST['login'])){
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
////        $username = mysqli_real_escape_string($conn, $_POST['username']);
//    $password = mysqli_real_escape_string($conn, $_POST['pwd']);

    $row = 0;

    $sqlLogin = mysqli_query($conn, "SELECT * FROM admin where adminEmail = '$_POST[email]' && password = '$_POST[pwd]'");
//        $result = mysqli_query($conn, $result);

    //checking if the username is available in the table
//        $row = mysqli_num_rows($sqlLogin);
    $row = mysqli_fetch_array($sqlLogin);
    if ($row > 0){
        echo 'This is working' . ' ' .$row['id']. $row['adminEmail'];
        header("Location: adminDashboard.php");
    } else{

        echo $errorMessage = "Incorrect Email or Password!";
    }

//            $_SESSION['login'] = true;
//            $_SESSION['user_id'] = $row['id'];
//            $_SESSION['username'] = $row['username'];
//
//
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
<div class="jumbotron jumbotron-fluid col-sm-6 offset-3" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <h1 style="padding-left: 25%">ADMIN LOGIN</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST" name="loginForm">

            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Username or Email" required>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="pwd" placeholder="Password" required>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="login" value="LOGIN"></button>
            </div>

        </form>

        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                New User? <a href="register.php">Register Here</a>
            </div>
        </div>
    </div>
</div>