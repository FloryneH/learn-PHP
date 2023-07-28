<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        echo 'nom : '.$_SESSION['nom'].'<br>';
        echo 'prenom : '.$_SESSION['prenom'].'<br>';
        echo 'age : '.$_SESSION['age'].'<br>';
    ?>
</body>
</html>