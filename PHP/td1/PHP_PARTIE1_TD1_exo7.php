<?php
    include "menu.php";
    menu()
?>

<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 7</title>

    <nav>
        <ul>
            <li><a href="exo1php.php" title="Exercice 1">Exercice 1</a></li>   
            <li><a href="exo2_1php.php" title="Exercice 2.1">Exercice 2.1</a></li>
            <li><a href="exo2_2php.php" title="Exercice 2.2">Exercice 2.2</a></li>
            <li><a href="exo3php.php" title="Exercice 3">Exercice 3</a></li>
            <li><a href="exo4php.php" title="Exercice 4">Exercice 4</a></li>
            <li><a href="exo5php.php" title="Exercice 5">Exercice 5</a></li>
            <li><a href="exo6php.php" title="Exercice 6">Exercice 6</a></li>
        </ul>
    </nav>
</head>
<body> 

<form action="" method="post">
    Votre login : <input type="text" name="login">
    Votre mot de passe : <input type="password" name="motdepasse"><br />
    <input type="submit" value="Connexion">
</form>

<?php
    if(isset($_SESSION["login"])) {
        echo"<p> ton nom est :".$_SESSION["login"]."</p>";
        } 

?>



    <?php
     //Code source//
    highlight_file(__FILE__);
    ?>
</body>