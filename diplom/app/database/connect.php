<?php

$serverName = "DESKTOP-NJ94H8V";
$connectionOptions = array("Database"=>"candy");
$conn = sqlsrv_connect($serverName, $connectionOptions);
if($conn){
    echo '<h1>Connection is success</h1>';
}
else{
    echo '<h1>Connection is failure</h1>';
}
