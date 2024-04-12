<?php

include ('connect.php');

$session_name = session_name();

if(isset($_COOKIE[$session_name]) || isset($_REQUEST[$session_name])){
    unset($_SESSION[$session_name]);
    session_destroy();
    header("Location: ../index.php");
    exit();
}
