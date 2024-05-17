<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/icon.svg">
</head>
<body>
    
    <div class="wrapper sign">
        <div class="sign__body">
            <h1 class="title">Регистрация</h1>
            <form action="../app/registration.php" method="post" name="signUP-form" class="form form__sign">
                <input type="email" name="email" placeholder="E-mail" autocomplete="off" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+" />
                <input type="text" name="username" placeholder="Имя пользователя" autocomplete="off" pattern="[a-zA-Z0-9]+" />
                <input type="password" name="pass" placeholder="Пароль" autocomplete="off" />
                <input type="submit" value="Зарегестрироваться">
            </form>
        </div>
    </div>


</body>
</html>