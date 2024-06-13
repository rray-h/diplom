<?php

include('connect.php');


$errors = "";

$email = ($_POST['email']);
$username = ($_POST['username']);
$password = ($_POST['pass']);

$email = htmlspecialchars($email);
$username = htmlspecialchars($username);
$password = htmlspecialchars($password);

$email = urldecode($email);
$username = urldecode($username);
$password = urldecode($password);

$email = trim($email);
$username = trim($username);
$password = trim($password);

$password__hash = password_hash($password, PASSWORD_BCRYPT);

$sql = "SELECT * FROM Users WHERE email=?";
$params = array($email);
$stmt = sqlsrv_query($connection, $sql, $params);
$count_of_email = sqlsrv_fetch($stmt);

if($count_of_email){
    $errors .= "This email is already exist";
} 
else if(empty($email)) {
    $errors .= "Email field is required";
}
else if(empty($username)){
    $errors .= "Username field is required";
}
else if(empty($password)){
    $errors .= "Password field is required";
}

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    header("Location: ../pages/signUP.php");
    exit();
}
else{
    $sql = "INSERT INTO Users (Username, Email, UserPass) VALUES (?, ?, ?)";
    $params = array($username, $email, $password__hash);
    $stmt = sqlsrv_query($connection, $sql, $params) or die(print_r(sqlsrv_errors(), true));

    header("Location: ../pages/signIN.php");
    exit();    
}
    
    














