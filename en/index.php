<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/image/logo.webp">
</head>
<body>

    <div class="wrapper">

        <header class="header">
            <nav class="header__nav">
                <a href="#" class="header__logo">
                    <img src="assets/image/logo.png" alt="Logo" />
                </a>
                <ul class="header__list">
                    <a href="pages/cart.php">
                        <li class="header__link">Cart</li>
                    </a>
                    <?php

                    if(isset($_SESSION['email'])) {
                        echo '
                        <a href="pages/profile.php">
                            <li class="header__link">Profile</li>
                        </a>';
                    }
                    else{
                        echo '
                        <a href="pages/signIN.php">
                            <li class="header__link">Sign In</li>
                        </a>
                        <li class="header__splash">/</li>
                        <a href="pages/signUP.php">
                            <li class="header__link">Sign Up</li>
                        </a>';
                    }


                    ?>
                </ul>
                <div class="change-lang">
                    <a href="/en/index.php" hreflang="en">EN</a>
                    <a href="/ru/index.php" hreflang="ru">RU</a>
                </div>
                <div class="menu-burger">
                    <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                    <label for="burger-checkbox" class="burger"></label>
                    <ul class="menu-burger-list">
                        <div class="menu-burger-list-item">
                            <li><a href="pages/cart.php" class="menu-burger-item header__link">Cart</a><li>
                            <li><a href="pages/signIN.php" class="menu-burger-item header__link">Sign In</a><li>
                            <li><a href="pages/signUP.php" class="menu-burger-item header__link">Sign Up</a><li>

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

            <div class="header__content">
                <div class="header__caption">
                    <h1 class="header__title">
                        Delicious cakes
                    </h1>
                </div>
                <div class="header__media">
                    <img class="cupcake" src="assets/image/logo.webp" alt="Cupcake" />
                    <div class="header__media-items">
                        <a href="#">
                            <img src="assets/image/telegram.png" alt="telegram" />
                        </a>
                        <a href="#">
                            <img src="assets/image/vk.png" alt="vk" />
                        </a>
                        <a href="#">
                            <img src="assets/image/instagram.png" alt="instagram" />
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <section class="popular block">
            <div class="popular__body">
                <h2 class="popular__title title">
                    Popular <a href="pages/categories.php">categories</a>
                </h2>
                <div class="popular__list">
                    <?php

                    include ('app/connect.php');

                    $sql = "SELECT TOP 4 * FROM Categories";
                    $stmt = sqlsrv_query($connection, $sql) or die(print_r(sqlsrv_errors(), true));
                   
                    while( $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                        echo '
                        <div class="popular__item">
                            <a href="pages/products.php?CategoryID=' . $data['CategoryID'] . '"><img src="' . $data['CategoryImage'] . '" alt="Bento"></a>
                            <a href="#">' . $data['CategoryName'] . ' cakes</a>
                        </div>';                        
                        
                    }

                    ?>
                </div>
            </div>
        </section>

        <section class="order block">
            <div class="order__body">
                <form action="app/send-order.php" method="post" class="form">     
                    <div class="order__title title">
                        <span>Make a order</span> <br/> CAKE
                    </div>
                    <input type="text" name="name" placeholder="Type your name" autocomplete="off" required/>                   
                    <input type="text" name="surname" placeholder="Type your surname" autocomplete="off" required/>                       
                    <input type="text" name="email" placeholder="Type your e-mail" autocomplete="off" required/>
                    <input type="submit" class="" value="Make to order" />
                </form>
            </div>
        </section>

        <footer class="footer">
            <div class="footer__media">
                <a href="#">
                    <img src="assets/image/telegram.png" alt="telegram" />
                </a>
                <a href="#">
                    <img src="assets/image/vk.png" alt="vk" />
                </a>
                <a href="#">
                    <img src="assets/image/instagram.png" alt="instagram" />
                </a>
                <a href="#"> candy@gmail.com </a>
            </div>
            <h3>
                <a href="3">FAQ</a>    
            </h3>
        </footer>

    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>