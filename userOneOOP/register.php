<?php
//
//include_once("db_conn.php");
//include_once("validation.class.php");
//
//session_start();
//if(isset($_SESSION['id'])){
//    header('Location: home.php');
//}
//
//if(isset($_POST['submit'])){
//
//    $validation = new UserValidator($_POST);
//    $errors = $validation->validateForm();
//
////    if(!$error){
////        $sql1 = "INSERT INTO oneuser (userName, userEmail, userGender, userPassword)
////                  VALUES ('$username', '$email', '$gender', '$password')";
////
////        #Object Oriented insertion into database
////        if ($conn->query($sql1) === TRUE) {
////            echo "New record created successfully";
////        } else {
////            echo "Error: " . $sql1 . "<br>" . $conn->error;
////        }
////
////    }
//}
//
//?>



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
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Logo</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 2</a>
            </li>
        </ul>
    </nav>
    <br/><br/>

    <div class="jumbotron jumbotron-fluid col-sm-6 offset-3">
        <div class="container">
            <h1 style="padding-left: 25%">USER REGISTRATION</h1>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" required value="<?php echo htmlspecialchars($_POST['username']); ?>" >

                    <span class="text-danger"> <?php if(isset($username_error)) echo $username_error; ?></span>
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" name="email" required value="<?php if ($error) echo $email; ?>"

                    <span class="text-danger"> <?php if(isset($email_error)) echo $email_error; ?> </span>
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Password">

                    <span class="text-danger"> <?php if(isset($password_error)) echo $password_error; ?> </span>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Retype password">

                    <span class="text-danger"> <?php if(isset($confirm_password_error)) echo $confirm_password_error; ?> </span>
                </div>

                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="SIGN UP" class="btn btn-primary">
                </div>

            </form>

        <span class="text-success">
            <?php if (isset($success_message)){
                echo $success_message;
            } ?>
        </span>

        <span class="text-danger">
            <?php if (isset($error_message)){
                echo $error_message;
            } ?>
        </span>

        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                Already Registered? <a href="login.php">Login Here</a>
            </div>
        </div>
    </div>
</div>
