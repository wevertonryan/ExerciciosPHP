<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 2x2</title>
    <style>
        * {
            margin: 0;
        }
        table tr td{
            padding: 5px; 
            border: solid 2px black;
        }

    </style>
</head>
<body>
    <table>
        <?php
            /*4. Matriz 2x2 Estática
            Crie uma matriz 2x2 e exiba seus valores em uma tabela HTML, usando comando for.*/
            $Matriz = array(array("João", "Maria"), array("José", "Marta"));
            $MatrizTamanhoX = count($Matriz);
            $MatrizTamanhoY = count($Matriz[0]);

            for($x = 0; $x < $MatrizTamanhoX; $x++) {
                echo "<tr>";
                for($y = 0; $y < $MatrizTamanhoY; $y++) {
                    echo "<td>" . $Matriz[$x][$y] . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>