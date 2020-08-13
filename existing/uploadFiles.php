<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USER SYSTEM</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="../bootstrap/js/jquery.min.js"></script>
    <!-- Popper Javascript for bootstrap 4 -->
    <script src="../bootstrap/js/popper.min.js"></script>

    <!-- Bootstrap Javascript -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<body class="bg-default">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">FirstAngular</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">Contact Us</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 bg-light mt-5 px-0">
            <h3 class="text-center text-light bg-danger p-3"> USER LOGIN PAGE </h3>

            <form action="upload.php" method="POST" class="p-4" enctype="multipart/form-data">

<!--                <input type="hidden" name="MAX_FILE_SIZE" value="4096">-->

                <div class="form-group">
                    <label for="file">File:</label>
                    <input type="file" class="form-control" name="file" placeholder="Upload">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-success btn-block">UPLOAD FILE</button>
                </div>

            </form>
        </div>
    </div>
</div>

