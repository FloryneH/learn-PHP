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
        function true() {
            $x = 2;
            var_dump($x === 2);
        };
        true();
    ?>

    <h2>Exercice 2</h2>
    <?php
        function string($prenom) {
            echo "bonjour ".$prenom;
        };
        string('Floryne');
    ?>

    <h2>Exercice 3</h2>
    <?php
        function concatenation($couleur1, $couleur2) {
            echo "j'aime le ".$couleur1." et le ".$couleur2;
        };
        concatenation('Lila', 'Blanc');
    ?>

    <h2>Exercice 4</h2>
    <?php
        function number($number1, $number2) {
            switch ($number1) {
                case $number1 > $number2:
                    echo "Le premier nombre est plus grand <br>";
                    break;
                case $number1 < $number2:
                    echo "Le premier nombre est plus petit <br>";
                    break;
                case $number1 === $number2:
                    echo "Les deux nombres sont identiques <br>";
                    break;
            }
        };
        number(4,2);
        number(1,2);
        number(2,2);
    ?>

    <h2>Exercice 5</h2>
    <?php
        function stringNumber($number, $cat) {
            echo "j'ai ".$number." ".$cat;
        };
        stringNumber(2,"chats");
    ?>

    <h2>Exercice 6</h2>
    <?php
        function phrase($nom, $prenoms, $age) {
            echo "Bonjour ".$nom." ".$prenoms.", tu as ".$age." ans.";
        };
        phrase("Hamouda", "Floryne", "20");
    ?>

    <h2>Exercice 7</h2>
    <?php
       function majorite($ages, $genre) {
        if ($genre == 'Femme') {
            if ($ages >= 18) {
                echo 'Vous êtes une femme et vous êtes majeur <br>';
            } else {
                echo 'Vous êtes une femme et vous êtes mineur <br>';
            }
        } else {
            if ($ages >= 18) {
                echo 'Vous êtes un homme et vous êtes majeur <br>';
            } else {
                echo 'Vous êtes un homme et vous êtes mineur <br>';
            }
        }
       }
       majorite(20, "Femme");
       majorite(15, "Femme");
       majorite(20, "Homme");
       majorite(15, "Homme");
    ?>

    <h2>Exercice 8</h2>
    <?php
      function addition($num1 = 1, $num2 = 2, $num3 = 3){
        echo $num1 + $num2 + $num3."<br>";
      };
      addition(4, 5, 6);
      addition();
    ?>
</body>
</html>