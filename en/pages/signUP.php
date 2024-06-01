<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/logo.webp">
</head>
<body>
    
    <div class="wrapper dark-block">
        <a href="../index.php" class="home-page subtitle">
            <li>→Home</li>
        </a>
        <div class="sign__body">
            <h1 class="title">Registration</h1>
            <form action="../app/registration.php" method="post" name="signUP-form" class="form__sign">
            
                <?php
                if (isset($_SESSION['errors'])) {
                    echo '<div class="error">' . $_SESSION['errors'] . '</div>';
                    unset($_SESSION['errors']);
                }
                ?>
             
                <input type="email" name="email" placeholder="Email" autocomplete="off" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+" />
                <input type="text" name="username" placeholder="Username" autocomplete="off" pattern="[a-zA-Z0-9]+" />
                <input type="password" name="pass" placeholder="Password" autocomplete="off" />
                <input type="submit" value="Sign up">



            </form>
            <div class="sign__or">
                Or
                <a href="signIN.php" class="subtitle">Sign in</a>
            </div>
        </div>
    </div>


</body>
</html>