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

    </style>
</head>
<body>
    <table>
        <?php
            /*5. Tabela de Produtos (Array nomeado)
            Crie um array nomeado onde a chave é o nome de um produto e o valor é seu preço. Exiba os produtos em uma tabela HTML.*/
            $Matriz = array(
                "Monitor" => 120.89, 
                "Computador" => 2599.99
            );

            foreach($Matriz as $produto => $valor) {
                echo "<tr>";
                echo "<td> Produto " . $produto . "</td>";
                echo "<td>: R$" . $valor . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>