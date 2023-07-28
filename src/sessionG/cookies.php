<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       if (isset($_COOKIE['user_login']) && isset($_COOKIE['user_password'])) {
        $login = $_COOKIE['user_login'];
        $password = $_COOKIE['user_password'];

        echo 'Login : ' . $login . '<br>';
        echo 'Mot de passe : ' . $password . '<br>';
    } else {
        echo 'Aucune information de cookie trouvée.';
    }
    ?>
</body>
</html>