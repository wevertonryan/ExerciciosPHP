<?php
    /*8. Exibir a Diagonal Principal de uma Matriz 3x3
    Crie uma matriz 3x3 fixa e exiba apenas os números da diagonal principal (onde o índice da linha é igual ao da coluna).*/
    $Matriz = [
        [11, 12, 13],
        [21, 22, 23],
        [31, 32, 33]
    ];
    $tamanho = count($Matriz);

    for($i = 0; $i < $tamanho; $i++) {
        echo $Matriz[$i][$i] . "</br>";
    }
?>