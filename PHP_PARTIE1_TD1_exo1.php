<?php
    include "menu.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 1</title>
</head>
<body>
    <?php 
     //Code source//
    highlight_file(__FILE__);
    ?>
    <?php 
        $NombreAleatoire = rand (0,100);
 
        if($NombreAleatoire%2 == 1){

            echo '<div class="paire"> Paire </div>';
            
        }else{
            
            echo '<div class="impaire"> Impaire </div>';
        }
    ?>
</body>
</html>