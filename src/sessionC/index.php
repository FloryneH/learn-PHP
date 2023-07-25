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
        $age = 14;
        if ($age >= 20) {
            echo "Vous êtes majeur";
        }else {
            echo "Vous êtes mineur";
        };
    ?>

    <h2>Exercice 2</h2>
    <?php
        $IsEasy = true;
        var_dump($IsEasy);
        echo"<br>";
        if ($IsEasy == true) {
            echo "C'est facile!!";
        }else {
            echo "C'est difficile !!!";
        };
        echo"<br>";
        echo $IsEasy == true ? "C'est facile!!" : "C'est difficile !!!";
    ?>

   
</body>
</html>