<?php
    include "menu.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 4</title>

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