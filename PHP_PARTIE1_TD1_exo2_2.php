<?php
    include "menu.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 2.2</title>
</head>
<body>
    <?php

        $information = array ('nom', 'prenom', 'motDePasse');

        echo '<table border="3">';
        for($info = 0; $info < 3; $info++)
        { 
        echo '<td>'. $information[$info]. '</td>';
        }

        $coordonnees = array (
            'nom' => 'Liénard ', 
            'prenom' => 'Romain ',
            'motDePasse' => 'azerty1234 ');
        
        echo '<table border="1">';
        
        foreach($coordonnees as $element)
        {
            echo '<td>'. $element. '</td>';
        }
    ?>
    <?php 
     //Code source//
    highlight_file(__FILE__);
    ?>
</body>
</html> 