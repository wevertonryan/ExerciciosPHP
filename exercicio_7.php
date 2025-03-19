<?php
    /*7. Copiar os Elementos de um Vetor para Outro
    Crie um vetor com 4 números e copie cada valor manualmente para um segundo vetor.*/
    $Vetor = ["Valor 1", "Valor 2", "Valor 3", "Valor 4"];
    $VetorCopia = [];

    foreach($Vetor as $indice => $valor) {
        $VetorCopia[$indice] = $valor;
    }

    var_dump($VetorCopia)
?>