<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
                    <a href="../index.php">
                        <li class="header__link">Home</li>
                    </a>
                    <?php

                    if(isset($_SESSION['email'])) {
                        echo '
                        <a href="profile.php">
                            <li class="header__link">Profile</li>
                        </a>';
                    }
                    else{
                        echo '
                        <a href="signIN.php">
                            <li class="header__link">Sign In</li>
                        </a>
                        <li class="header__splash">/</li>
                        <a href="signUP.php">
                            <li class="header__link">Sign Up</li>
                        </a>';
                    }


                    ?>
                </ul>
                <div class="menu-burger">
                    <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
                    <label for="burger-checkbox" class="burger" id="menu-burger"></label>
                    <ul class="menu-burger-list" id="menu-burger-list">
                        <div class="menu-burger-list-item">
                            <li><a href="cart.php" class="menu-burger-item header__link">Cart</a><li>
                            <li><a href="../index.php" class="menu-burger-item header__link">Home</a><li>
                            <?php

                            if(isset($_SESSION['email'])) {
                                echo '
                                    <li><a href="profile.php"  class="menu-burger-item header__link">Profile</a></li>';
                            }
                            else{
                                echo '
                                    <li><a href="signIN.php" class="menu-burger-item header__link">Sign In</a></li>
                                    <li><a href="signUP.php" class="menu-burger-item header__link">Sign Up</a></li>';
                            }
                            
                            ?>

                        </div>
                        <div class="menu-burger-media">
                            <div>
                                <a href="#" class="menu-burger-list-item">
                                    <img src="../assets/image/telegram-w.png" alt="telegram" />
                                </a>
                                <a href="#" class="menu-burger-list-item">
                                    <img src="../assets/image/vk-w.png" alt="vk" />
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

                    $sql = "SELECT * FROM Categories";
                    $stmt = sqlsrv_query($connection, $sql) or die(print_r(sqlsrv_errors(), true));

                    while( $data = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                        echo '
                        <div class="categories__item">
                            <a href="products.php?CategoryID=' . htmlspecialchars($data['CategoryID']) . '"><img src="../' . $data['CategoryImage'] . '" alt="' . $data['CategoryName'] . '"></a>
                            <a href="#">' . htmlspecialchars($data['CategoryName']) . '</a>
                        </div>';                        
                        
                    }

                    ?>
                </div>
            </div>
        </div>

    </div>
    <script src="../assets/js/script.js"></script>

</body>
</html>