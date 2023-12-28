<?php

$serverName = "DESKTOP-NJ94H8V";
$connectionOptions = array("Database"=>"candy");
$conn = sqlsrv_connect($serverName, $connectionOptions);
if($conn){
    echo "<script> console.log('Connect is success'); </script>";
}
else{
    die( print_r( sqlsrv_errors(), true));
}
