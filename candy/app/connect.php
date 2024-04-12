<?php
$serverName = "DESKTOP-NJ94H8V";
$connectionInfo = array( "Database"=>"candy");
$connection = sqlsrv_connect($serverName, $connectionInfo);

if( $connection ) {
    echo "Connect is ok.<br />";
}
else{
    echo "Connect is fail.<br />";
    die( print_r( sqlsrv_errors(), true));
}
