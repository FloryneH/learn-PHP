<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercic 1</h2>
    <?php
        echo date('d/m/Y');
    ?>

    <h2>Exercic 2</h2>
    <?php
        echo date('d/m/Y');
    ?>

    <h2>Exercic 3</h2>
    <?php
       date_default_timezone_set('Europe/Paris'); //Définit le fuseau horaire sur Europe/Paris.

       $local = 'fr_FR'; //Définit le français en France.
       $dateFormat = IntlDateFormatter::FULL; //Définit le format de la date en full (jour de la semaine, jour du mois, mois, année)
       $timeFormat = IntlDateFormatter::NONE; //Définit le format de l'heure (aucune)
       $dateFullFormatter = new IntlDateFormatter($local, $dateFormat, $timeFormat); //Définit notre date en fonction des paramètres déclarés plus haut

       $date = new DateTime(); //Obtenir la date actuelle
       $formattedDate = $dateFullFormatter->format($date); //Formate la date actuelle en fonction de $dateFullFormatter
       echo $formattedDate; //Afficher la date actuelle au bon format
    ?>

    <h2>Exercic 4</h2>
    <?php
       echo 'Timestamp actuel : ' .time(). '<br>';

       $date = mktime(15, 0, 0, 8, 2, 2016);
       echo 'Timestamp 2 août 2016: ' .$date. '<br>';
    ?>

    <h2>Exercic 5</h2>
    <?php
        $now = new DateTime("now");
        $dateMai = date_create('2016-05-16');
        $diff = date_diff($dateMai, $now);
        echo $diff ->format('%a jours');
    ?>

    <h2>Exercic 6</h2>
    <?php
        $month = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        echo "Il y a ".$month." jours dans le mois de février 2016";
    ?>

    <h2>Exercic 7</h2>
    <?php
       $dateAdd = new DateTime("now");
       date_add($dateAdd,date_interval_create_from_date_string("20 days"));
       echo date_format($dateAdd,"d-m-Y");
    ?>

    <h2>Exercic 8</h2>
    <?php
      $dateSub = new DateTime("now");
      date_sub($dateSub,date_interval_create_from_date_string("22 days"));
      echo date_format($dateSub,"d-m-Y");
    ?>
</body>
</html>