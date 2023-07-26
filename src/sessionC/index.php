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

    <h2>Exercice 3</h2>
    <?php
        $age = 20;
        $genre = 'Femme';
        if ($genre == 'Femme') {
            if ($age >= 18) {
                echo 'Vous êtes une femme et vous êtes majeur';
            } else {
                echo 'Vous êtes une femme et vous êtes mineur';
            }
        } else {
            if ($age >= 18) {
                echo 'Vous êtes un homme et vous êtes majeur';
            } else {
                echo 'Vous êtes un homme et vous êtes mineur';
            }
        }
    ?>

    <h2>Exercice 4</h2>
    <?php
        $magnitude = [
            1 => "Micro-séisme impossible à ressentir",
            2 => "Micro-séisme impossible à ressentir mais enregistrable
            par les sismomètres.",
            3 => "Ne cause pas de dégats mais commence à pouvoir être
            légèrement ressenti.",
            4 => "Séisme capable de faire bouger des objets mais ne
            causant généralement pas de dégats.",
            5 => "Séisme capable d'engendrer des dégats importants sur
            de vieux bâtiments ou bien des bâtiments présentants des défauts de
            construction. Peu de dégats sur des bâtiments modernes.",
            6 => "Fort séisme capable d'engendrer des destructions
            majeures sur une large distance (180 km) autour de l'épicentre.",
            7 => "Séisme capable de destructions majeures à modérées sur
            une très large zone en fonction de la distance.",
            8 => "Séisme capable de destructions majeures sur une très
            large zone de plusieurs centaines de kilomètres.",
            9 => "Séisme capable de tout détruire sur une très vaste
            zone.",
        ];
        foreach($magnitude as $key => $valeur){
            echo $key.' : '.$valeur."<br>";
        } 
    ?>

    <h2>Exercice 5</h2>
    <?php
        $maVariable = 'Homme';
        if ($maVariable != 'Homme') {
            echo 'C\'est une développeuse !!!';
        } else {
            echo 'C\'est un développeur !!!';
        }
    ?>

    <h2>Exercice 6</h2>
    <?php
        $monAge = 20;
        if ($monAge >= 18) {
            echo 'Tu es majeur';
        } else {
            echo 'Tu n\'es pas majeur';
        }
    ?>

    <h2>Exercice 7</h2>
    <?php
        $maVariable2 = false;
        if ($maVariable2 == false) {
            echo 'c\'est pas bon !!!';
        } else {
            echo 'c\'est ok !!';
        }
    ?>

    <h2>Exercice 8</h2>
    <?php
        $maVariable3 = true;
        if ($maVariable3) {
            echo 'c\'est ok !!';
        } else {
            echo 'c\'est pas bon !!!';
        }
    ?>
</body>
</html>