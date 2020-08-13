<?php
    /** Create Logout Page to destroy SESSION **/

    session_start();
    session_destroy();
    header('location:index.php');
?>