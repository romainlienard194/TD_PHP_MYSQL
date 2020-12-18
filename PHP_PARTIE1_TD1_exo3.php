<?php
    include "menu.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 3</title>

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