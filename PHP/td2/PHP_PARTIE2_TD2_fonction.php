<!--Exo 1-->
<?php 
    function tableau()
    {
        ?>
<table border="1">
    <tr>
        <td>ligne1</td>
        <td>ligne2</td>
        <td>ligne3</td>
    </tr>
</table>
<?php
    }
?>

<!--Exo 2-->
<?php
    function tableau2($colonne1, $colonne2, $colonne3) {
    
    $colonne1='colonne1';
    $colonne2='colonne2';
    $colonne3='colonne3';

    echo '<table border=1>';
        echo '<td>'.$colonne1.'</td>';
        echo '<td>'.$colonne2.'</td>';
        echo '<td>'.$colonne3.'</td>';
    echo '</table>';
    {
        tableau();
    }
    }
?>

<!--Exo 3-->
<?php
    function moyenne($number1, $number2, $number3) {
        $moy = ($number1 + $number2 + $number3) / 3;
    }
?>