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
    <title>Exercice 2.1</title>

    <nav>
        <ul>
            <li><a href="exo1php.php" title="Exercice 1">Exercice 1</a></li>
            <li><a href="exo2_2php.php" title="Exercice 2.2">Exercice 2.2</a></li>  
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

    $tableau = array ('1', '2', '3', '4', '5');
        echo'<table border="1"><tr>';
        for($numero =0; $numero < 5; $numero++)
        {
            echo "<td>".$tableau[$numero]. "</td>";
        }
    ?>
    <?php 
     //Code source//
    highlight_file(__FILE__);
    ?>
</body>
</html>