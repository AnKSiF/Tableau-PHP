<!DOCTYPE html>
<html>
    <head>
        <title>multiplications de 1 a 12</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="tableau.css" rel="stylesheet" type="text/css">
    </head>



    <body>
        <table>
            <thead>
                <tr>
                    <td colspan="1"></td>
                    <?php
                    //creation de la ligne au dessus 1 a 12
                    for ($a = 1; $a <= 12; $a++) {
                        echo "<th scope='col' align='right'>", $a, "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                  //affichage de 1 a 12 pour chaque ligne
                for ($b=1;$b<=12;$b++){
                    echo "<tr> <th scope='row'>",$b,"</th>";
                      //multiplication
                    for ($a=1;$a<=12;$a++){
                        echo "<td align='right'>",$a*$b,"</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
