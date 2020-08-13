<?php
    include('header.php');
    include('navbar.php');
?>

<div class="container-fluid" style="margin-top: 25px">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card">
                <div class="card-header text-sm-center">
                    <h4>REGISTER HERE</h4>
                </div>

                <div class="card-block">
                    <form>
                        <fieldset class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your full name">
                            <!-- <span class="text-danger"> --><?php //if(isset($username_error)) echo $username_error; ?><!--</span>-->
                        </div>

                        <fieldset class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" >
                            <!-- <span class="text-danger"> --><?php //if(isset($username_error)) echo $username_error; ?><!--</span>-->
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="password">Your password:</label>
                            <input type="password" class="form-control" name="password" placeholder="*******">
                            <!-- <span class="text-danger"> --><?php //if(isset($username_error)) echo $username_error; ?><!--</span>-->
                        </fieldset>

                        <input class="btn btn-secondary" type="button" value="Register" name="submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    include('footer.php');
?>

