<?php

include ("connect.php");

if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
{
    $name = "../avatar/" . $_FILES["filename"]["name"];

    $sql = "INSERT INTO Users (UserAva) VALUES ($name)";
    $stmt = sqlsrv_query($connection, $sql) or die(print_r(sqlsrv_errors(), true));

    move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
    
    header("Location: ../pages/profile.php");
    exit();
}
