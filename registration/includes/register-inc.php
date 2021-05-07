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
        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../register.php?error=SqlError");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$userName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);


            if($rowCount > 0){
                header("Location: ../register.php?error=usernameTaken");
                exit();
            }
            else{
                $sql = "INSERT INTO users (username,password) VALUES (?,?) ";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../register.php?error=SqlError");
                    exit();
                }
                else{

                    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"ss",$userName,$hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.php?success=Registered");

                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


?>