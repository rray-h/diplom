<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="shortcut icon" href="assets/image/icon.svg" type="image/png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    
    <section class="register">

        <div class="register__body">
            <h1 class="register__title title">Registration</h1>
            <div class="register__window">
                <form action="app/database/login-boot.php" method="post" class="form__register">
                    <input type="text" placeholder="Your name" name="name" autocomplete="off" />
                    <input type="text" placeholder="Your surname" name="surname" autocomplete="off" />
                    <input type="email" placeholder="Your e-mail" name="email" autocomplete="off" />
                    <input type="password" placeholder="Your password" name="pass" autocomplete="off" />
                    <input type="submit" value="Sign up" />
                </form>
            </div>
        </div>

    </section>

</body>
</html>