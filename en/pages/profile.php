<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/icon.svg">
</head>
<body>

    <div class="wrapper profile">

        <div class="profile__content">
            <div class="profile__photo">
                <form enctype="multipart/form-data" action="ava.php" class="form__change " method="post">
                    <label class="profile__photo-block">
                        <input type="file" name="filename">
                        <input type=submit value="Upload">
                    </label>    
                </form>
            </div>
            <div class="profile__info">
                <div class="profile__info-block">
                    <h3>Username</h3>
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
                    <h3>E-mail</h3>
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
                <h2>History of order</h2>
                <div class="profile__history-block"></div>
                    <a class="logout" href="../app/logout.php">Log out</a>
            </div>
        </div>

    </div>

</body>
</html>
