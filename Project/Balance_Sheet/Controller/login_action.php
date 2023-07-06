<?php

$default_username = "sadi";
$default_password = 123; 

if(isset($_POST['button'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = [];
    $error['wrongpassword'] = 'Password Wrong';
    if( !empty($_POST['username']) && !empty($_POST['password'])){
        if($username==$default_username && $password == $default_password){
            session_start();
            $_SESSION["authenticated"]=="true";
            //var_dump($_SESSION['authenticated']);
            header("Location: ../View/dashboard.php");
        }
        else{
            $count = 1;
            header("Location: ../View/login.php");
            
        }   
    }    
}
?>