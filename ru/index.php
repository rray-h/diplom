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
                        <li class="header__link">Корзина</li>
                    </a>
                    <?php
                    if(isset($_SESSION['email'])) {
                        echo '
                        <a href="pages/profile.php">
                            <li class="header__link">Профиль</li>
                        </a>';
                    }
                    else{
                        echo '
                        <a href="pages/signIN.php">
                            <li class="header__link">Войти</li>
                        </a>
                        <li class="header__splash">/</li>
                        <a href="pages/signUP.php">
                            <li class="header__link">Регистрация</li>
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
                    <label for="burger-checkbox" class="burger" id="menu-burger"></label>
                    <ul class="menu-burger-list" id="menu-burger-list">
                        <div class="menu-burger-list-item">
                            <li><a href="pages/cart.php" class="menu-burger-item header__link">Корзина</a><li>
                            
                            <?php

                            if(isset($_SESSION['email'])) {
                                echo '
                                    <li><a href="pages/profile.php"  class="menu-burger-item header__link">Профиль</a></li>';
                            }
                            else{
                                echo '
                                    <li><a href="pages/signIN.php" class="menu-burger-item header__link">Войти</a></li>
                                    <li><a href="pages/signUP.php" class="menu-burger-item header__link">Регистрация</a></li>';
                            }
                            
                            ?>
                            
                            ?>
                        </div>
                        <div class="menu-burger-media">
                            <div>
                                <a href="#" class="menu-burger-list-item">
                                    <img src="assets/image/telegram-w.png" alt="telegram" />
                                </a>
                                <a href="#" class="menu-burger-list-item">
                                    <img src="assets/image/vk-w.png" alt="vk" />
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
                        Вкусные тортики
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
                    </div>
                </div>
            </div>
        </header>

        <section class="popular block">
            <div class="popular__body">
                <h2 class="popular__title title">
                    Популярные <a href="pages/categories.php">категории</a>
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
                            <a href="#">' . $data['CategoryName'] . '</a>
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
                        <span>Сделать торт</span> <br/> НА ЗАКАЗ
                    </div>
                    <input type="text" name="name" placeholder="Введите имя" autocomplete="off" required/>                   
                    <input type="text" name="surname" placeholder="Введите фамилию" autocomplete="off" required/>                       
                    <input type="text" name="email" placeholder="Введите e-mail" autocomplete="off" required/>
                    <input type="submit" class="" value="Сделать заказ" />
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