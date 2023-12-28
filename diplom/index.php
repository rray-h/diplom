<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy</title>
    <link rel="shortcut icon" href="assets/image/icon.svg" type="image/png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="wrap">

        <header class="header container">
            <div class="header__body">
                <nav class="nav">
                    <a href="index.php" class="nav__logo"><img src="assets/image/logo.png" alt="here pic" /></a>
                    <ul class="nav__list">
                        <a href="index.php" class="nav__link">
                            <li>Home</li>
                        </a>
                        <a href="auth.php" class="nav__link">
                            <li>Profile</li>
                        </a>
                        <a href="#" class="nav__link">
                            <li>Cart</li>
                        </a>
                    </ul>
                </nav>
                <div class="header__content">
                    <div class="header__title">
                        <h2>Delicious cakes</h2>
                        <a href="categories.php"><button>Buy now</button></a>
                    </div>
                    <div class="header__media">
                        <img src="assets/image/cupcake.png" alt="here pic" class="media__pie" />
                        <div class="media">
                            <a href="#"><img src="assets/image/telegram.png" alt="here telegram" /></a>
                            <a href="#"><img src="assets/image/vk.png" alt="here vk" /></a>
                            <a href="#"><img src="assets/image/instagram.png" alt="here instagram" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="categories container">
            <div class="categories__body">
                <h2 class="categories__title title">Popular <a href="categories.php">categories</a> </h2>

                <div class="categories__kinds">
                    <div class="categories__kind">
                        <a href="#"><img src="assets/image/Birthday.png" alt="Here Birthday" /></a>
                        <h2 class="categories__subtitle">Birthday cakes</h2>
                    </div>
                    <div class="categories__kind">
                        <a href="#"><img src="assets/image/Wedding.png" alt="Here Wedding" /></a>
                        <h2 class="categories__subtitle">Wedding cakes</h2>
                    </div>
                    <div class="categories__kind">
                        <a href="#"><img src="assets/image/Diet.png" alt="Here Diet" /></a>
                        <h2 class="categories__subtitle">Diet cakes</h2>
                    </div>
                    <div class="categories__kind">
                        <a href="#"><img src="assets/image/Bento.png" alt="Here Bento" /></a>
                        <h2 class="categories__subtitle">Bento cakes</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="order container">
            <div class="order__body">
                <div class="order__title title">Make to order</div>
                <div class="order__window">
                    <form action="app/database/action.php" method="post" class="order__form">
                        <input type="text" name="name" placeholder="Your name" autocomplete="off" />
                        <input type="text" name="surname" placeholder="Your surname" autocomplete="off" />
                        <input type="email" name="email" placeholder="Your email" autocomplete="off" />
                        <input type="submit" value="Make to order" />
                    </form>
                    <img src="assets/image/cupcake-order.png" alt="Here cupcake" />
                </div>
            </div>
        </section>

        <footer class="footer mini__container">
            <div class="footer__body">
                <div class="footer__media">
                    <a href="#"><img src="assets/image/telegram.png" alt="here telegram" /></a>
                    <a href="#"><img src="assets/image/vk.png" alt="here vk" /></a>
                    <a href="#"><img src="assets/image/instagram.png" alt="here instagram" /></a>
                </div>
                <p>8 (800) 777-55-88</p>
                <div class="footer__contact">
                    <p>candy@gmail.com</p>
                    <a href="#"><p>FAQ</p></a>
                </div>
            </div>
        </footer>

        <script src="assets/js/script.js"></script>
    </div>
</body>
</html>