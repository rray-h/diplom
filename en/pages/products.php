<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bento</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/logo.webp">

</head>
<body>
    <div class="wrapper">

        <div class="categories">
                <nav class="header__nav">
                    <ul class="header__list">
                        <a href="cart.php">
                            <li class="header__link">Cart</li>
                        </a>
                        <a href="categories.php">
                            <li class="header__link">Categories</li>
                        </a>

                        <?php

                        if(isset($_SESSION['email'])) {
                            echo '
                            <a href="../index.php">
                                <li class="header__link">Home</li>
                            </a>
                            <a href="profile.php">
                                <li class="header__link">Profile</li>
                            </a>';
                        }
                        else{
                            echo '
                            <a href="../index.php">
                                <li class="header__link">Home</li>
                            </a>';
                        }


                        ?>
                    </ul>
                    <div class="menu-burger">
                        <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                        <label for="burger-checkbox" class="burger"></label>
                        <ul class="menu-burger-list">
                            <div class="menu-burger-list-item">
                                <li><a href="cart.php" class="menu-burger-item header__link">Cart</a><li>
                                <li><a href="../index.php" class="menu-burger-item header__link">Home</a><li>
                            </div>
                            <div class="menu-burger-media">
                                <div>
                                    <a href="#" class="menu-burger-list-item">
                                        <img src="assets/image/telegram-w.png" alt="telegram" />
                                    </a>
                                    <a href="#" class="menu-burger-list-item">
                                        <img src="assets/image/vk-w.png" alt="telegram" />
                                    </a>
                                    <a href="#" class="menu-burger-list-item">
                                        <img src="assets/image/instagram-w.png" alt="telegram" />
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="header__link">
                                        FAQ
                                    </a>
                                </div>
                            </div>
                        </ul>
                    </div>                
                </nav>
            <div class="categories__body">
                <div class="categories__list">
                    <?php

                    include ('../app/connect.php');
            

                    if (isset($_GET['CategoryID'])) {
                        $selectedCategoryId = $_GET['CategoryID'];
                    
                        
                        $sqlProducts = "SELECT * FROM Products WHERE CategoryID = ?";
                        $params = array($selectedCategoryId);
                        $stmtProducts = sqlsrv_query($connection, $sqlProducts, $params);
                    
                        if ($stmtProducts === false) {
                            die(print_r(sqlsrv_errors(), true));
                        }
                        } else {
                            die("Не выбрана категория.");
                        }

                        if($stmtProducts){
                            while( $data = sqlsrv_fetch_array($stmtProducts, SQLSRV_FETCH_ASSOC)){
                                echo '
                                <div class="categories__item-cart">
                                    <img src="../' . $data['ProductImage'] . '" alt="' . $data['ProductName'] . '" /></a>
                                        <form method="post" action="../app/add-to-cart.php">
                                            <a href="#">' . $data['ProductName'] . '</a>
                                            <input type="hidden" name="ProductID" value="' . $data['ProductID'] . '" />
                                            <input type="submit" class="add-to-cart" name="add_to_cart" value="Add to cart">
                                        </form>
                                </div>';                        
                                
                            }    
                        }

                    

                    ?>

                </div>
            </div>
        </div>

    </div>

</body>
</html>