<?php

include 'connect.php';

$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$email = htmlspecialchars($_POST['email']);

$sql = "INSERT INTO Buyers (FirstName, LastName, Email) VALUES (?, ?, ?)";
$params = array($name, $surname, $email);

$res = sqlsrv_query($conn, $sql, $params);
if($res == false){
    die(print_r(sqlsrv_errors(), true));
}

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'index.html';
header("Location: $redirect");
exit();