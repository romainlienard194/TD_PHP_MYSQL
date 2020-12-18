<?php
    include "menu.php";
    
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 3</title>

    </head>

    <body>
        <table border="1">

            <caption>Liste des matières</caption>

                <thead>
                    <tr>
                        <td> </td>
                        <th>1er semestre</th>
                        <th>2ème semestre</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>

                    </tr>

                    <tr>
                        <td rowspan=3>SI01</td>
                        <td>SI1, SI2, SI3, SI4</td>
                        <td>SI5, SI6</td>
                    </tr>

                    <tr>
                        <td>SLAM</td>
                        <td>SISR</td>
                    </tr>

                    <tr>
                        <td>SLAM1, SLAM2</td>
                        <td>SISR1, SISR2</td>
                    </tr>

                    <tr>

                    </tr>

                    <tr>
                        <td rowspan="3">SI02</td>
                        <td colspan="2">SI7</td>
                    </tr>

                    <tr>
                        <td>SLAM</td>
                        <td>SISR</td>
                    </tr>

                    <tr>
                        <td>SLAM3, SLAM5, SLAM5</td>
                        <td>SISR3, SISR4, SISR5</td>
                    </tr>
                </tbody>

        </table>

        <p><a href="exo1.html">Exercice 1</a></p>
        <p><a href="exo2.html">Exercice 2</a></p>
    </body>

</html>