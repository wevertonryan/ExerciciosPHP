<?php
    /*2. Somar Elementos de um Vetor
    Crie um vetor com 5 números inteiros e some manualmente os valores acessando cada índice diretamente.*/
    $vetor = [1, 1, 1, 1, 1, 2];
    $tamanho = count($vetor);
    $soma = 0;
    for($i = 0; $i < $tamanho; $i++){
        $soma += $vetor[$i];
    }
    echo $soma;
?>