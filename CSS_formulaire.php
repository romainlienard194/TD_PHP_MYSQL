<?php
    include "menu.php";
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>
        <link rel="stylesheet" href="formulaire.css"> 

    </head>

    <body>

        <form>
            <p>Civilité :</p>

            <div>

            <label for="homme">Mr.</label>
            <input type="radio" id="title1"
               name="contact" value=" Mr.">

            <label for="femme">Mme ou Mlle.</label>
            <input type="radio" id="title1"
               name="contact" value=" Mme ou Mlle">
          
            </div>

            <div>

                <label for="uname">Nom : </label>
                <input type="text" id="uname" name="name">

            </div>
<p></p>
            <div>

                <label for="uname">Prénom : </label>
                <input type="text" id="uname" name="name">

            </div>

            Date de naissance
            <FORM>
                <SELECT name="nom" size="1">
                    <OPTION>1
                    <OPTION>2
                    <OPTION>3
                    <OPTION>4
                    <OPTION>5
                    <OPTION>6
                    <OPTION>7
                    <OPTION>8
                    <OPTION>9
                    <OPTION>10
                    <OPTION>11
                    <OPTION>12
                    <OPTION>13
                    <OPTION>14
                    <OPTION>15
                    <OPTION>16
                    <OPTION>17
                    <OPTION>18
                    <OPTION>19
                    <OPTION>20
                    <OPTION>21
                    <OPTION>22
                    <OPTION>23
                    <OPTION>24
                    <OPTION>25
                    <OPTION>26
                    <OPTION>27                    
                    <OPTION>28
                    <OPTION>29
                    <OPTION>30
                    <OPTION>31
                </SELECT>
            
                <SELECT name="nom" size="1">
                    <OPTION>Janvier
                    <OPTION>Février
                    <OPTION>Mars
                    <OPTION>Avril
                    <OPTION>Mai
                    <OPTION>Juin
                    <OPTION>Juillet
                    <OPTION>Août
                    <OPTION>Septembre
                    <OPTION>Octobre
                    <OPTION>Novembre
                    <OPTION>Décembre
                </SELECT>
             Année
                <SELECT name="nom" size="1">
                    <OPTION>2003
                    <OPTION>2002
                    <OPTION>2001
                    <OPTION>2000
                    <OPTION>1999
                    <OPTION>1998
                    <OPTION>1997
                    <OPTION>1996
                    <OPTION>1995
                    <OPTION>1994
                </SELECT>
            </FORM>

            <div>

                <label for="uname">Numéro : </label>
                <input type="text" id="uname" name="name">

                <label for="uname">Rue : </label>
                <input type="text" id="uname" name="name">

            </div>


            Adresse :
            <div>

                <label for="uname">Code postal </label>
                <input type="text" id="uname" name="name">

                <label for="uname">Ville </label>
                <input type="text" id="uname" name="name">

            </div>

            <div>

                <label for="uname">Téléphone : </label>
                <input type="text" id="uname" name="name">

            </div>

            <div>

                <label for="uname">E-mail :  </label>
                <input type="text" id="uname" name="name">

            </div>
            <div>

              <button type="submit">Envoyer</button> <button type="submit">Remise à zéro</button>

            </div>

          </form>

    </body>

</html>