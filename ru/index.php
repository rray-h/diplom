<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/image/icon.svg">
</head>
<body>

    <div class="wrapper">

        <header class="header">
            <nav class="header__nav">
                <a href="#" class="header__logo">
                    <img src="assets/image/logo.png" alt="Logo" />
                </a>
                <ul class="header__list">
                    <a href="#">
                        <li class="header__link">Главная страница</li>
                    </a>
                    <a href="#">
                        <li class="header__link">Корзина</li>
                    </a>
                    <?php

                    $sessionName = session_name();
                    if(isset($_COOKIE[$sessionName]) || isset($_REQUEST[$sessionName])) {
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
                        <li class="header__link">/</li>
                        <a href="pages/signUP.php">
                            <li class="header__link">Зерегистрироваться</li>
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
                            <li><a href="#" class="menu-burger-item header__link">Главная страница</a><li>
                            <li><a href="#" class="menu-burger-item header__link">Корзина</a><li>
                            <li><a href="pages/signUP.php" class="menu-burger-item header__link">Зарегестрироваться</a><li>
                            <li><a href="pages/signIN.php" class="menu-burger-item header__link">Войти</a><li>

                        </div>
                        <div class="burger-media">
                            <div>
                                <a href="#" class="header__link">
                                <img src="assets/image/telegram-w.png" alt="telegram" />
                                </a>
                                <a href="#" class="header__link">
                                <img src="assets/image/vk-w.png" alt="telegram" />
                                </a>
                                <a href="#" class="header__link">
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
                        Вкусные тортики
                    </h1>
                    <a href="#"><button type="submit" class="header__btn">Купить сейчас</button></a>    
                </div>
                <div class="header__media">
                    <img class="cupcake" src="assets/image/cupcake.png" alt="Cupcake" />
                    <div class="header__socnet">
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

        <section class="categories block">
            <div class="categories__body">
                <h2 class="categories__title title">
                    Популярные <a href="#">категории</a>
                </h2>
                <div class="categories__kinds">
                    <div class="categories__kind">
                        <img src="assets/image/Birthday.png" alt="Birthday"/>
                        <a href="#"> Торт на дни <br/> рождения</a>
                    </div>
                    <div class="categories__kind">
                        <img src="assets/image/Wedding.png" alt="Wedding"/>
                        <a href="#">Свадебные <br/> торты</a>
                    </div>
                    <div class="categories__kind">
                        <img src="assets/image/Diet.png" alt="Diet" />
                        <a href="#">Диетические <br/> торты</a>
                    </div>
                    <div class="categories__kind">
                        <img src="assets/image/Bento.png" alt="Bento">
                        <a href="#">Бенто торты</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="order block">
            <div class="order__body">
                <div class="order__title title">
                    Сделать торт на заказ
                </div>
                <form action="#" class="form">                        
                    <input type="text" placeholder="Введите имя" autocomplete="off"/>                   
                    <input type="text" placeholder="Введите фамилию" autocomplete="off"/>                       
                    <input type="text" placeholder="Введите e-mail" autocomplete="off"/>
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
                <a>
                    <p>candy@gmail.com</p>
                </a>
            </div>
            <h3>FAQ</h3>
        </footer>

    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>