<?php
    include "menu.php";
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 2.1</title>
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