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
                <?php if(isset($_SESSION ['user_id'])) { ?>
                    <li>
                        <p class="navbar-text">
                            <strong>Welcome!</strong>
                            You' are signed in as <strong> <?php echo $_SESSION["$username"]; ?> </strong>
                        </p>
                    </li>
                <li> <a href="logout.php">LOG OUT</a></li>

                <?php } else { ?>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="register.php">SIGN UP</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>