<?php

if(isset($_POST['submit'])){
    // Add database connection
    require 'database.php';

    $userName = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword =$_POST['confirmPassword'];

    if(empty($userName) || empty($password)  || empty($confirmPassword)){
        header("Location: ../register.php?error=emptyfields&username=".$userName);
        exit();
        // js code to display the error in front end
    }
    else if(!preg_match("/^[a-zA-z0-9]*/",$userName)){  // validation for userName
        header("Location: ../register.php?error=InvalidUsername&username=".$userName);
        exit();
    }
    else if($password !== $confirmPassword){
        header("Location: ../register.php?error=PasswordsDoNotMatch&username=".$userName);
        exit();
    }
    else{
        $sql = "SELECT username FROM users WHERE username = $userName";
        


    }

}


?>