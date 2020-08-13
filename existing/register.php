<?php
    include ('register.inc.php');
    include 'header.php';
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-info mt-5 px-0">
                <h3 class="text-center text-light bg-danger p-3"> REGISTRATION PAGE </h3>
                <!--<form action="--><?php //echo htmlspecialchars($_SERVER['PHP_SELF']) ?><!--" method="POST" class="p-4" enctype="multipart/form-data">-->
                <form action="register.inc.php" method="POST" class="p-4" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Alphabets only" value="<?php if ($error) echo $username; ?>" >

                        <span class="text-danger"> <?php if(isset($username_error)) echo $username_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="sample@hotmail.com..." value="<?php if ($error) echo $email; ?>">

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
                        <input type="submit" name="submit" value="SIGN UP" class="btn btn-danger btn-block">
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <p> Already Registered? <a href="login.php">Click Here to Login</a> </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>