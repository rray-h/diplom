<?php
$serverName = "DESKTOP-NJ94H8V";
$connectionInfo = array( "Database"=>"candy");
$connection = sqlsrv_connect($serverName, $connectionInfo);

if( $connection ) {
    echo "<script> console.log('Connect is ok') </script>";
}
else{
    echo "<script> console.log('Connect is fail') </script>";
    die( print_r( sqlsrv_errors(), true));
}
