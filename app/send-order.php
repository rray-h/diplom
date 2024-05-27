<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$surname = htmlspecialchars($surname);
$email = htmlspecialchars($email);

$name = urldecode($name);
$surname = urldecode($surname);
$email = urldecode($email);

$name = trim($name);
$surname = trim($surname);
$email = trim($email);

if(mail("idamsword@gmail.com", "Торт на заказ", "Имя:" . $name . ", " . $surname . ". From: " . $email . "\r\n")){
    echo "<script> console.log('Messege is sended')";

    header("Location: ../index.php");
    exit();
}
else{
    echo "<script> console.log('Messege is not sended')";
    header("Location: ../index.php");
    exit();
}