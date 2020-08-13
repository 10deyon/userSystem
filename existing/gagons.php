<?php


//// Define variables and initialize with empty values
//$username = $password = "";
//$username_err = $password_err = "";
//
//// Processing form data when form is submitted
//if($_SERVER["REQUEST_METHOD"] == "POST") {
//    // Check if username is empty
//    if (empty($_POST["username"])) {
//        $username_err = "Please enter username.";
//    } else {
//        $username = trim($_POST["username"]);
//    }
//    // Check if password is empty
//    if (empty($_POST["password"])) {
//        $password_err = "Please enter your password.";
//    } else {
//        $password = trim($_POST["password"]);
//    }
//
//// Validate credentials
//    if(empty($username_err) && empty($password_err)){
//        // Prepare a select statement
//        $sql = "SELECT id, username, password FROM users WHERE username = ?";
//
//        // Check if username exists, if yes then verify password
//        if(mysqli_num_rows($stmt) == 1){
//            if(password_verify($password, $hashed_password)){
//                // Password is correct, so start a new session
//                session_start();
//
//                // Store data in session variables
//                $_SESSION["loggedin"] = true;
//                $_SESSION["id"] = $id;
//                $_SESSION["username"] = $username;
//
//                // Redirect user to welcome page
//                header("location: welcome.php");
//            } else{
//                // Display an error message if password is not valid
//                $password_err = "The password you entered was not valid.";
//            }
//        } else{
//            // Display an error message if username doesn't exist
//            $username_err = "No account found with that username.";
//        }
//    }
//}

//if(isset($_POST['login'])) {
//    $username = mysqli_real_escape_string($conn, $_POST['username']);
//    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
//
//    $sql = "SELECT * FROM users WHERE userName='$username' and userPassword='$password'";
//    $query = mysqli_query($conn, $sql);
//    $result = mysqli_num_rows($query);
//
//    if ($result > 0) {
//        while($row = mysqli_fetch_assoc($query)){
//            $_SESSION['id'] = $row['id'];
//            $_SESSION['name'] = $row['userName'];
//        }
//        header("Location: home.php");
//        exit();
//    } else{
//        echo "No records in database";
//    }
//}


//if (isset($_SESSION['id']) != ""){
//    header("Location: home.php");
//}
//
//if(isset($_POST['login'])){
////        $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $username = mysqli_real_escape_string($conn, $_POST['username']);
//    $password = mysqli_real_escape_string($conn, $_POST['pwd']);
//
//    $row = 0;
//
////        $sqlLogin = mysqli_query($conn, "SELECT * FROM userdata where userEmail = '$_POST[email]' && userPassword = '$_POST[pwd]'");
//    $sqlLogin = mysqli_query($conn, "SELECT * FROM userdata where id='$_SESSION[id]' ");
////        $sqlLogin = mysqli_query($conn, "SELECT * FROM userdata where id='$id' ");
////        $result = mysqli_query($conn, $result);
//
//    //checking if the username is available in the table
//    $result = mysqli_num_rows($sqlLogin);
////        $row = mysqli_fetch_asoc($result);
//    if ($result > 0){
//        echo 'This is working' . ' ' .$row['id']. $row['userEmail'];
////            header("Location: home.php");
//    } else{
//        echo $errorMessage = "Incorrect Email or Password!";
//    }
//
////            $_SESSION['login'] = true;
////            $_SESSION['user_id'] = $row['id'];
////            $_SESSION['username'] = $row['username'];
////
////
//}