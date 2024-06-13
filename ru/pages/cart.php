<?php
session_start();

if(isset($_SESSION['email'])) {

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="shortcut icon" href="../assets/image/logo.webp">
    </head>
    <body>
        
        <div class="wrapper">
            <div class="cart">
                <div class="cart__content">
                    <h1 class="title">Cart</h1>

                    <?php


                    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $item)
                        echo '<div class="cart__list">
                                <div class="cart__items">
                                    ' . $item . '
                                    <form method="post" action="../app/add-to-cart.php">
                                        <input type="hidden" name="ProductID" value="' . $item . '">
                                        <input type="submit" class="remove-from-cart" name="remove_from_cart" value="Удалить">
                                    </form>
                                    </div>
                              </div>';
                    }
                    else{
                        echo '<div class="cart__items">
                                <h3> Cart is empty </h3>
                              </div>';
                    }

                    ?>

                    <div class="cart__nav">
                        <a href="../pages/categories.php" class="cart__btn">Back</a>
                        <a href="#" class="cart__btn">Pay</a>
                    </div>
                </div>
            </div>

        </div>
    </body>
    </html>

<?php
}
else{
    header("Location: signIN.php");
    exit();  

}
?>