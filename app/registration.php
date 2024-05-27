<?php

include('connect.php');


    $email = ($_POST['email']);
    $username = ($_POST['username']);
    $password = ($_POST['pass']);
    $password__hash = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "SELECT * FROM Users WHERE email=?";
    $params = array($email);
    $stmt = sqlsrv_query($connection, $sql, $params);
    $count_of_email = sqlsrv_fetch($stmt);

    if($count_of_email){
        echo '<script> alert("This email is already exist") </script>';
    } 
    else{
        $sql = "INSERT INTO Users (Username, Email, UserPass) VALUES (?, ?, ?)";
        $params = array($username, $email, $password__hash);
        $stmt = sqlsrv_query($connection, $sql, $params) or die(print_r(sqlsrv_errors(), true));

        header("Location: ../pages/signIN.php");
        exit();    
        
    
    }
    
    














