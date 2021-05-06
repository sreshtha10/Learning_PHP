<?php

if(isset($_POST['submit'])){
    $file= $_FILES['file'];
    $name = $_FILES['file']['name']; // find file name
    $tmp_name =$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $size = $_FILES['file']['size'];
    $tmpExtention = explode('.',$name);
    $fileExtension = strtolower(end($tmpExtention));
    // Allowed extension
    $isAllowed = array('jpg','png','pdf','jpeg');
    if(in_array($fileExtension,$isAllowed)){
        if($error === 0){
             if($size < 30000000){
                    $newFileName = uniqid('',true) . "." . "$fileExtension";
                    $fileDestination = "uploads/" . $newFileName;
                    move_uploaded_file($tmp_name, $fileDestination);
                    header("Location: files.php?uploadedsuccess");

             }
             else{
                 echo "File too big!";
             }
        }
        else{
            echo "Error occured !";
        }
    }
    else{
        echo "Invalid file type !";
    }
} 


?>