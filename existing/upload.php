<?php

if (isset($_POST['submit'])){
    $file = $_FILES['file'];

    //print_r ($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    //check file type
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 5000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header('Location: uploadFiles.php?uploadsuccessful');
            }else{
                echo "File is too large";
            }
        }else{
            echo "There was an error uploading your file";
        }
    }else{
        echo "Files of this type cannot be uploaded!";
    }
}