<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 1</h2>
    <?php
        echo 'User Agent : '.$_SERVER['HTTP_USER_AGENT']. '<br>';
        echo 'Adresse IP : '.$_SERVER['REMOTE_ADDR']. '<br>';
        echo 'Nom du serveur : '.$_SERVER['SERVER_NAME']. '<br>';
    ?>

    <h2>Exercice 2</h2>
    <a href="session.php">Session</a>
    <?php
        session_start();
        $_SESSION['nom'] = 'Hamouda';
        $_SESSION['prenom'] = 'Floryne';
        $_SESSION['age'] = 20;
    ?>

    <h2>Exercice 3</h2>
    <form method="post" action="">
        <label for="login">Login:</label>
        <input type="text" name="login" id="login" required>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password" required>
        
        <input type="submit" name="submit" value="Valider">
    </form>
    <a href="cookies.php">cookies</a>;
    <?php
        if (isset($_POST['submit'])) {
            print_r($_POST);

            $login = $_POST["login"];
            $password = $_POST['password'];
        
            setcookie('user_login', $login, time()+3600*24, '/', '', true);
            setcookie('user_password', $password, time() +3600*24, '/', '', true);
        
            echo '<br> Login : ' . $login . '<br>';
            echo 'Mot de passe : ' . $password . '<br>';
        }
    ?>
</body>
</html>