<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="shortcut icon" href="assets/image/icon.svg" type="image/png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>
    
    <section class="auth">

        <div class="auth__body">
            <h1 class="auth__title title">Login</h1>
            <div class="auth__window">
                <form action="app/database/auth-boot.php" method="post" class="form__auth">
                    <input type="email" placeholder="Your e-mail" name="email" autocomplete="off" />
                    <input type="password" placeholder="Your password" name="pass" autocomplete="off" />
                    <input type="submit" value="Sign in" />
                </form>
            </div>
        </div>

    </section>

</body>
</html>