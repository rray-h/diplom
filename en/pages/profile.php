<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/logo.webp">
</head>
<body>

    <div class="wrapper">
        <div class="profile">
            <nav class="header__nav">
                <ul class="header__list">
                    <a href="cart.php">
                        <li class="header__link">Cart</li>
                    </a>
                    <a href="../index.php">
                            <li class="header__link">Home</li>
                    </a>
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

            <div class="profile__content">
                <div class="profile__info">
                    <div class="profile__info-block">
                        <h3 class="subtitle">Username</h3>
                        <?php

                        include("../app/connect.php");
                        session_start();

                        $req = 'SELECT * FROM Users';
                        $stmt = sqlsrv_query($connection, $req) or die(print_r(sqlsrv_errors(), true));
                        $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

                        $sessionName = session_name();
                        if(isset($_COOKIE[$sessionName]) || isset($_REQUEST[$sessionName])) {
                            echo "<h2>" . $_SESSION['name'] . "</h2>";
                        }

                        ?>
                    </div>
                    <div class="profile__info-block">
                        <h3 class="subtitle">E-mail</h3>
                        <?php

                        include("../app/connect.php");

                        $sql = 'SELECT * FROM Users';
                        $stmt = sqlsrv_query($connection, $sql) or die(print_r(sqlsrv_errors(), true));
                        $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

                        $sessionName = session_name();
                        if(isset($_COOKIE[$sessionName]) || isset($_REQUEST[$sessionName])) {
                            echo "<h2>" . $_SESSION['email'] . "</h2>";
                        }

                        ?>
                    </div>
                </div>
                <div class="profile__history">
                    <h3 class="subtitle">History of order</h2>
                    <div class="profile__history-block"></div>
                    <a class="logout subtitle" href="../app/logout.php">→Log out</a>
                </div>
            </div>
        </div>                
    </div>

</body>
</html>
