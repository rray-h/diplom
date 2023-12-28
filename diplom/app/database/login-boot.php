<?php

include 'connect.php';

$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['pass']);

$sql = "INSERT INTO Buyers (FirstName, LastName, Email, BuyerPass) VALUES (?, ?, ?, ?)";
$params = array($name, $surname, $email, $pass);
$stmt = sqlsrv_query($conn, $sql, $params);

if($stmt == false){
    die(print_r(sqlsrv_errors(), true));
}

echo "<script> alert('Success');</script>";

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'index.html';
header("Location: $redirect");
exit();

