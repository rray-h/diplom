<?php

include 'connect.php';

$email = ($_POST['email']);
$password = ($_POST['pass']);

$sql = 'SELECT * FROM Users WHERE email=?';
$params = array($email);
$stmt = sqlsrv_query($connection, $sql, $params) or die(print_r(sqlsrv_errors(), true));

if(sqlsrv_has_rows($stmt) != 1){
    echo "Error";
}
else{ 
    while($data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
        session_start();
        $_SESSION['id'] = $data['UserID'];
        header("Location: ../index.php");
        exit();  
    }
}
