<?php

$sessionName = session_name();
if(isset($_COOKIE[$sessionName]) || isset($_REQUEST[$sessionName])) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="shortcut icon" href="../assets/image/icon.svg">
    </head>
    <body>
        
        <div class="wrapper dark-block">

            <div class="cart__content">
                <h1 class="title">Корзина</h1>
                <div class="cart__items"></div>
                <div class="cart__nav">
                    <a href="../index.php" class="cart__btn">Вернуться</a>
                    <a href="#" class="cart__btn">Оплатить</a>
                </div>
            </div>
        </div>
    </body>
    </html>';
}
else{
    header("Location: signIN.php");
    exit();  

}