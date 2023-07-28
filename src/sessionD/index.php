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
    $x = 0;
    while ($x < 10) {
        echo "x = " . $x . "<br>";
        $x++;
    }
    ?>

    <h2>Exercice 2</h2>
    <?php
    $x = 0;
    $y = 2;
    while ($x < 20) {
        $x = $x * $y;
        echo 'x = ' . $x . '<br>';
        $x++;
    }
    ?>

    <h2>Exercice 3</h2>
    <?php
    $a = 100;
    $b = 1;
    while ($a > 10) {
        $a = $a * $b;
        echo $a . ", ";
        $a--;
    }
    ?>

    <h2>Exercice 4</h2>
    <?php
    $c = 1;
    while ($c < 10) {
        echo "c = " . $c . "<br>";
        $c = $c + ($c / 2);
    }
    ?>

    <h2>Exercice 5</h2>
    <?php
    $d = 1;
    while ($d <= 15) {
        echo $d . " : On y arrive presque <br>";
        $d++;
    }
    ?>

    <h2>Exercice 6</h2>
    <?php
    $e = 20;
    while ($e >= 0) {
        echo $e . " : C'est presque bon <br>";
        $e--;
    }
    ?>

    <h2>Exercice 7</h2>
    <?php
    $number = range(1,100,15);
    foreach ($number as $k => $value) {
        echo $value. " : On tient le bon bout <br>";
    }
    ?>

    <h2>Exercice 7</h2>
    <?php
   
    ?>
</body>

</html>