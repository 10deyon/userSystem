<?php
    include 'header.php';
?>


<div class="container">
        <h3>WELCOME TO USER MANAGEMENT SYSTEM</h3>

                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="register.php">SIGN UP</a></li>


    <?php
    //    //include auth_session.php file on all user panel pages
    //    session_start();
    //
    //if(!isset($_SESSION["alreadyLogged"]) || $_SESSION["alreadyLogged"] !== true){
    //    header("location: login.php");
    //}
    //
    //?>
    <!--<div class="alert alert-success alert-dismissible fade in">-->
    <!--    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>-->
    <!--    <strong>Success!</strong> Logged in successful.-->
    <!--</div>-->
    <!---->
    <!--<div class="collapse navbar-collapse">-->
    <!--    <ul class="nav navbar-nav navbar-left">-->
    <!--        --><?php //if(isset($_SESSION ['id'])) { ?>
    <!--            <li>-->
    <!--                <p class="navbar-text">-->
    <!--                    <strong>Welcome!</strong>-->
    <!--                    You' are signed in as <strong> --><?php //echo $_SESSION['username']; ?><!-- </strong>-->
    <!--                </p>-->
    <!--            </li>-->
    <!--            <li> <a href="logout.php">LOG OUT</a></li>-->
    <!--        --><?php //} ?>
    <!--    </ul>-->
    <!--</div>-->
    <!---->
    <!---->
    <!--<div class="container">-->
    <!---->
    <!--    --><?php //if (isset($_SESSION['success'])) : ?>
    <!--        <div class="alert alert-success">-->
    <!--            <h3>-->
    <!--                --><?php
    //                    echo $_SESSION['success'];
    //                    unset($_SESSION['success']);
    //                ?>
    <!--            </h3>-->
    <!--        </div>-->
    <!--    --><?php //endif ?>
    <!---->
    <!--    <div class="form">-->
    <!--        --><?php //echo htmlspecialchars($_SESSION["username"]); ?>
    <!--        <p>Hey, --><?php //echo $_SESSION['username'] . " " . $_SESSION['username']; ?><!--!</p>-->
    <!--        <p>You are now user dashboard page.</p>-->
    <!--        <p>-->
    <!--            <a href="resetPassword.php" class="btn btn-warning">Reset Your Password</a>-->
    <!--            <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>-->
    <!--        </p>-->
    <!--    </div>-->
    <!---->
    <!--</div>-->