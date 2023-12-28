<?php

include 'connect.php';

$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['pass']);

$sql = "SELECT Email, BuyerPass FROM Buyers";
$stmt = sqlsrv_query($conn, $sql);
$check = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if($check['Email'] == $email) && $check['BuyerPass'] == $pass){
    echo '<h1> SUCCESS </h1>';
}
else {
    echo '<h1> FAILURE </h1>';
}