<?php

include ('connect.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart']) && isset($_SESSION['userid'])) {
    $productId = $_POST['ProductID'];
    $userID = $_SESSION['userid'];
    
    $sqlCart = "INSERT INTO Cart (UserID, ProductID) VALUES (?, ?)";
    $params = array($userID, $productId);
    $stmtCart = sqlsrv_query($connection, $sqlCart, $params) or die(print_r(sqlsrv_errors(), true));
    
    $sqlProducts = "SELECT * FROM Products WHERE ProductID=?";
    $params = array($productId);
    $stmtProducts = sqlsrv_query($connection, $sqlProducts, $params) or die(print_r(sqlsrv_errors(), true));
    $data = sqlsrv_fetch_array($stmtProducts, SQLSRV_FETCH_ASSOC);

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (!in_array($productId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $data['ProductName'];
    }


    header("Location: ../pages/categories.php");
    exit();
}
else if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_from_cart']) && isset($_SESSION['userid'])) {
    $productId = $_POST['ProductID'];

    if (($key = array_search($productId, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    header("Location: ../pages/cart.php");
    exit();

}
else{
    header("Location: ../pages/signIN.php");
    exit();
}



