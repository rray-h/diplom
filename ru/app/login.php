<?php

include ('connect.php');
session_start();


$email = ($_POST['email']);
$password = ($_POST['pass']);

$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

$email = urldecode($email);
$password = urldecode($password);

$email = trim($email);
$password = trim($password);

$sql = 'SELECT * FROM Users WHERE email=?';
$params = array($email);
$stmt = sqlsrv_query($connection, $sql, $params) or die(print_r(sqlsrv_errors(), true));

if(sqlsrv_has_rows($stmt) != 1){
    $_SESSION['errors'] = "Login or password is incorrect";
    header("Location: ../pages/signIN.php");
    exit();
}
else{ 
    while($data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
        if(password_verify($password, $data['UserPass'])){
            $_SESSION['userid'] = $data['UserID'];
            $_SESSION['name'] = $data['Username'];
            $_SESSION['email'] = $data['Email'];
            header("Location: ../index.php");
            exit();  
        }
    }
}
