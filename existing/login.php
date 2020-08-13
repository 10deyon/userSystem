<?php
//    include('login.inc.php');
    include 'header.php';

    include_once("db_conn.php");

// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["alreadyLogged"]) && $_SESSION["alreadyLogged"] === true){
    //if (isset($_SESSION['id']) != ""){
    header("location: dashboard.php");
    exit();
}

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $errorMessage = $error = "";
//    $error = false;

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);


    if (empty($username)) {
//            $error = true;
        $username_err = "Username field is empty";
    }
    if (empty($password)) {
//            $error = true;
        $password_err = "Password is required";
    }

    if (empty($username_err) && empty($password_err)) {
        $password = md5($password);
        $sql = "SELECT * FROM userdata WHERE userName='$username' and userPassword='$password'";
        $query = mysqli_query($conn, $sql);
        $results = mysqli_num_rows($query);
        if ($results == 1) {
            while ($row = mysqli_fetch_assoc($query)) {
                session_start();
                // Store data in session variables
                $_SESSION["alreadyLogged"] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['userName'];//$username;
                $_SESSION['success'] = "You are now logged in";
            }
            header('Location: dashboard.php');
            exit();
        }
    }else{
        $errorMessage = "Incorrect Email or Password!";
    }
}else{
    // Display an error message if username doesn't exist
    $error = "No account found with that username.";
}

?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 bg-light mt-5 px-0">
            <h3 class="text-center text-light bg-danger p-3"> USER LOGIN PAGE </h3>

            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong><?php echo $errorMessage ?> </strong>
            </div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="p-4" enctype="multipart/form-data">

                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" placeholder="Your Username here">

                    <span class="text-danger"> <?php if(isset($username_err)) echo $username_err; ?></span>
                </div>

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Your Password">

                    <span class="text-danger"> <?php if(isset($password_err)) echo $password_err; ?> </span>
                </div>

                <div class="form-group">
                    <input type="submit" name="login" value="LOGIN" class="btn btn-danger btn-block">
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <p>  New User? <a href="register.php">Click Here to Register Here</a> </p>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>