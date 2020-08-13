<?php
    session_start();
    include_once("db_conn.php");

//    if (isset($_SESSION['id']) != ""){
//        header("Location: home.php");
//    }

    if(isset($_POST['login'])) {
//        $email = mysqli_real_escape_string($conn, $_POST['email']);
//        $password = mysqli_real_escape_string($conn, $_POST['pwd']);
        $count = 0;
        $result = mysqli_query($conn, "SELECT * FROM userdata where userEemail = '$_POST[email]' && userPassword = '$_POST[pwd]'");
        $count = mysqli_num_rows($result);
        if ($count == 0) {
            echo 'error';
        }
        header("Location: home.php");
    }

    if ($row = mysqli_fetch_array($result)){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        header("Location: home.php");
    } else {
        $errorMessage = "Incorrect Email or Password!";
    }

#Object Oriented Selection
$sql2 = "SELECT id, userEmail, userPassword FROM oneuser";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - User Email: " . $row["userEmail"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

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
        <h1 style="padding-left: 25%">USER LOGIN</h1>

<!--        <div class="alert alert-danger">-->
<!--            <p> --><?php //echo $error ?><!-- </p>-->
<!--        </div>-->

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="POST" name="loginForm">

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" placeholder="email" required>
            </div>

            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pwd" required>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="login" value="LOGIN">Submit</button>
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
                New User? <a href="login.php">Register Here</a>
            </div>
        </div>
    </div>
</div>