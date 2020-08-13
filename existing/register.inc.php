<?php
session_start();
include_once("db_conn.php");

if(!isset($_SESSION["alreadyLogged"]) || $_SESSION["alreadyLogged"] !== true){
    header("location: login.php");
}

$error = false;

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    //Form Validation
    if(!preg_match("/^[a-zA-Z0-9]+$/", $username)){
        $error = true;
        $username_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $email_error = "Enter a valid email ID";
    }
    if(strlen($password) < 6){
        $error = true;
        $password_error = "Password must be greater than 6 characters";
    }
    if($password != $confirm_password){
        $error = true;
        $confirm_password_error = "Passwords do not match";
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
//
//    $userDetailsCheck = "SELECT * FROM userdata WHERE username='$username' OR email='$email' LIMIT 1";
//    $result = mysqli_query($conn, $userDetailsCheck);
//    $user = mysqli_fetch_assoc($result);
//
//    if ($user) { // if user exists
//        if ($user['username'] === $username) {
//            array_push($errors, "Username already exists");
//        }
//        if ($user['email'] === $email) {
//            array_push($errors, "email already exists");
//        }
//    }
    // Finally, register user if there are no errors in the form
    if(!$error) {
        $sqlUsername = mysqli_query($conn,"select id from userdata where userName='$username'");
        $sqlEmail = mysqli_query($conn,"select id from userdata where userEmail='$email' ");
        $rowEmail=mysqli_num_rows($sqlEmail);
        $rowUsername=mysqli_num_rows($sqlUsername);

        if($rowEmail>0){
            $matchEmailError = ('Email already exist. Please try with another email');
        } else if($rowUsername>0) {
            $matchUsernameError = ('Username already exist. Please try another username');
        }else {
            $password = md5($password);
            $sql1 = "INSERT INTO userdata (userName, userEmail, userPassword) values ('$username','$email', '$password')";

            $result = mysqli_query($conn, $sql1); #or die(mysqli_connect_errno() . "Data cannot be inserted");
            #Procedural Programming insertion into database
            if ($result) {
                $_SESSION["alreadyLogged"] = true;
                $_SESSION['username'] = $username;//$row['userName'];
                $_SESSION['success'] = "You are now logged in";
                $successMessage = "New record created successfully!";
                header('Location:dashboard.php');
                #"<a href='login.php'>Click here to Login</a>";
            } else {
                $errorMessage = "Error: " . $sql1 . "<br>" . mysqli_error($conn);
                #$errorMessage = "Error in registering, please try again!";
            }
//        mysqli_close($conn);
        }
    }
}
?>