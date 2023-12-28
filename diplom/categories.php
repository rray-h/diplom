<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="shortcut icon" href="assets/image/icon.svg" type="image/png">
    <link rel="stylesheet" href="assets/css/categories.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="header mini__container">
        <div class="header__body">
            <nav class="nav">
                <a href="index.php" class="nav__logo"><img src="assets/image/logo.png" alt="here pic" /></a>
                <ul class="nav__list">
                    <a href="index.php" class="nav__link">
                        <li>Home</li>
                    </a>
                    <a href="#" class="nav__link">
                        <li>Profile</li>
                    </a>
                    <a href="#" class="nav__link">
                        <li>Cart</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>


    <section class="categories">
        <div class="categories__body">
            <div class="categories__kinds"> 

                <?php

                    include 'app/database/connect.php';
                        
                    $sql = "SELECT * FROM Categories";
                    $res = sqlsrv_query($conn, $sql);

                    while( $row = sqlsrv_fetch_array( $res, SQLSRV_FETCH_ASSOC) ) {
                        echo "<div class='categories__kind'>";
                            echo "<a href='#'> <img src='assets/image/" . $row['CategoryImage'] . "' alt='Here pic' />"; 
                            echo "<h2 class='categories__subtitle'>" . $row['CategoryName'] . "</h2>";
                        echo "</div>";
                    }

                    sqlsrv_free_stmt( $res);

                ?>

            </div>
        </div>
    </section>
    
</body>
</html>

