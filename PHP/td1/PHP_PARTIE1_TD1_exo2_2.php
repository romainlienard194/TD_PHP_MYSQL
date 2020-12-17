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
    <title>Exercice 2.2</title>

    <nav>
        <ul>
            <li><a href="exo1php.php" title="Exercice 1">Exercice 1</a></li>
            <li><a href="exo2_1php.php" title="Exercice 2.1">Exercice 2.1</a></li>
            <li><a href="exo3php.php" title="Exercice 3">Exercice 3</a></li>
            <li><a href="exo4php.php" title="Exercice 4">Exercice 4</a></li>  
            <li><a href="exo5php.php" title="Exercice 5">Exercice 5</a></li>
            <li><a href="exo6php.php" title="Exercice 6">Exercice 6</a></li>
            <li><a href="exo7php.php" title="Exercice 7">Exercice 7</a></li>
        </ul>
    </nav>
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