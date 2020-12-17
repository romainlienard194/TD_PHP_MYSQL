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
    <title>Exercice 3</title>

    <nav>
        <ul>
            <li><a href="exo1php.php" title="Exercice 1">Exercice 1</a></li>
            <li><a href="exo2_1php.php" title="Exercice 2.1">Exercice 2.1</a></li>
            <li><a href="exo2_2php.php" title="Exercice 2.2">Exercice 2.2</a></li>
            <li><a href="exo4php.php" title="Exercice 4">Exercice 4</a></li>
            <li><a href="exo5php.php" title="Exercice 5">Exercice 5</a></li>
            <li><a href="exo6php.php" title="Exercice 6">Exercice 6</a></li>
            <li><a href="exo7php.php" title="Exercice 7">Exercice 7</a></li>
        </ul>
    </nav>

    <?php
    define('NB_COL',3);
    define('NB_LIG',4);
    $tableau = ['nom', 'prenom', 'mdp', 'nom1', 'prenom1', 'mdp1', 'nom2', 'prenom2', 'mdp2', 'nom3', 'prenom3', 'mdp3', ''];
?>

</head>
<body>

    <?php 
     //Code source//
    highlight_file(__FILE__);
    ?>

    <table>
    <?php
        for($j = 0; $j < NB_LIG; $j++){

            echo '<tr>';
        
        for($i = 0; $i < NB_COL; $i++){
            $index = $i + $j * NB_COL;
            $style = 'border : 2px solid black;';

            echo '<td style="'.$style.'">'.$tableau[$index]. '</td>';
        }

        echo '</tr>';
    }
    ?>
    </table>
        
    
</body>
</html> 