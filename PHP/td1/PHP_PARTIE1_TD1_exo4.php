<?php
    include "menu.php";
    menu()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 4</title>

    <nav>
        <ul>
            <li><a href="exo1php.php" title="Exercice 1">Exercice 1</a></li>
            <li><a href="exo2_1php.php" title="Exercice 2.1">Exercice 2.1</a></li>
            <li><a href="exo2_2php.php" title="Exercice 2.2">Exercice 2.2</a></li>
            <li><a href="exo3php.php" title="Exercice 3">Exercice 3</a></li>
            <li><a href="exo5php.php" title="Exercice 5">Exercice 5</a></li>   
            <li><a href="exo6php.php" title="Exercice 6">Exercice 6</a></li>
            <li><a href="exo7php.php" title="Exercice 7">Exercice 7</a></li>
        </ul>
    </nav>
</head>
<body>
    <?php

    function racine($a, $b, $c) {
        echo "La solution pour l'équation $a x² + $b + $c : '<br>'";

        $delta = $b * $b - ( 4 * $a * $c );

        if( $delta < 0)
            echo ' Il existe aucune solution donc S = ∅.';

        if ( $delta == 0)

            echo ' Il existe une solution réelle.'. -$b / ( 2 * $a);

        if ( $delta > 0) {

            $x1 = ( -$b - sqrt($delta)) / (2 * $a);

            $x2 = ( -$b + sqrt($delta)) / (2 * $a);

            echo " Il existe deux solutions réelles distinctes : $x1 et $x2.";
        }
    }

    racine( 4, 7, 2);
    
    ?>  
    
    <?php 
     //Code source//
    highlight_file(__FILE__);
    ?>
</body>
</html> 