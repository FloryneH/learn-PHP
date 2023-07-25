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
        $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
        foreach($mois as $key => $valeur) {
            echo $valeur.' ';
            echo "<br>";
        }
    ?>

    <h2>Exercice 2</h2>
    <?php
       echo $mois[2];
    ?>

    <h2>Exercice 3</h2>
    <?php
       echo $mois[5];
    ?>

    <h2>Exercice 4</h2>
    <?php
        $remplacement = array(7 => "août");
        $tableauReplace = array_replace($mois, $remplacement);
        foreach($tableauReplace as $key => $valeur) {
            echo $valeur.' ';
            echo "<br>";
        }
    ?>

    <h2>Exercice 5</h2>
    <?php
        $departements = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
        foreach($departements as $key => $valeur) {
            echo $valeur.' ';
            echo "<br>";
        }
    ?>

    <h2>Exercice 6</h2>
    <?php
       echo $departements[59];
    ?>

    <h2>Exercice 7</h2>
    <?php
        $departements[51] = 'Marne';
        foreach($departements as $key => $valeur) {
            echo $valeur.' ';
            echo "<br>";
        }
    ?>

    <h2>Exercice 8</h2>
    <?php
        foreach($mois as $key => $valeur) {
            echo $valeur.' ';
            echo "<br>";
        }
    ?>

    <h2>Exercice 9</h2>
    <?php
        foreach($departements as $key => $valeur) {
            echo $valeur.' ';
            echo "<br>";
        }
    ?>

    <h2>Exercice 10</h2>
    <?php
        foreach($departements as $key => $valeur) {
            echo 'Le département '.$valeur.' a le numéro '.$key;
            echo "<br>";
        }
    ?>
</body>
</html>