<?php
    include "menu.php";
    
?>

<?php
    session_start ();
    if(isset($_POST['submit2'])) {
        session_unset();
        session_destroy();
    }

    function ajoutPatient($marequete1, $marequete2){    
        try	{	
            $marequete="INSERT INTO Patient(nom, prenom) VALUES('".$marequete1."', '".$marequete2."')";
            echo $marequete;
            $BDD=new PDO('mysql:host=192.168.65.138; dbname= charset=utf8','root','root');
            $donneeBrute=$BDD->query($marequete);
        }catch(Exception$e)	{
            die('Erreur	:	'.$e->getMessage());	
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SQL_TD4_Exo3</title>
</head>
<body>
    <div>
        <h1>Exercice 3</h1>
        <form action="" method="post">
            <label for="name">Nom du patient :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="name">Prénom du patient :</label>
            <input type="text" name="prenom" id="prenom" required>
            <input type="submit" name="submit" value="Envoyer">
        </form>
<?php
        if(isset($_POST['submit'])){
            ajoutPatient($_POST['nom'], $_POST['prenom']);
        }else{
            
        }
?>
        <form action="" method="post">
            <input type="submit" name="submit2" value="Deconnexion">    
        </form>
        <div>
<?php    
                    //code source//
                    highlight_file((__FILE__));
?>
        </div>
    </div>
</body>
</html>