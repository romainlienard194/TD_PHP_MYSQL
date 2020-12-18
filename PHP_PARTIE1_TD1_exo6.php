<?php
    include "menu.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 6</title>

</head>
<body>

        <form action="" method="GET">
        
        <p> Votre prénom : <input type="text" name ="nom"/> </p>
        <p> Votre âge : <input type="text" name ="age"/> </p> 
        <p><input type="submit" name ="OK"/> </p>

        </form>
        
        <p class="p"> Bonjour, <?php echo htmlspecialchars($_GET['nom']); ?>.
        Tu as <?php echo (int)$_GET['age']; ?> ans.</p>

        <style>
            .p{
                color: blueviolet;
            }
        </style>
    
    <?php 
     //Code source//
    highlight_file(__FILE__);
    ?>
</body>