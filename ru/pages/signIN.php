<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/icon.svg">
</head>
<body>
    
    <div class="wrapper sign">
        <div class="sign__body">
            <h1 class="title">Авторизация</h1>
            <form action="../app/login.php" method="post" name="signIN-form" class="form form__sign">
                <input type="email" name="email" placeholder="E-mail" autocomplete="off" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+" />
                <input type="password" name="pass" placeholder="Пароль" autocomplete="off" />
                <input type="submit" value="Войти">
            </form>
        </div>
    </div>

</body>
</html>
