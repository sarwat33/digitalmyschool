<?php

// dummy username and password for the ADMIN

$admin_username = "admin1";
$admin_password = "admin1";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];
    if($admin_username == $username && $admin_password == $password){
        header('Location: update.php');
        die();
        
    }
    else{

        header('Location: login.php');
        die();
        
    }

}




?>