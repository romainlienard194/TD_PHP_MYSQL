<?php
    include "menu.php";
    
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