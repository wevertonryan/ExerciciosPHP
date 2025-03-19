<?php
    /*3. Ordenação Manual de um Vetor
    Crie um vetor de 3 números e ordene-os manualmente (sem usar sort()), comparando e trocando os valores, se necessário.*/
    function ordenarNumero($vetor) {
        $tamanho = count($vetor);
        for($i = 1; $i < $tamanho; $i++){
            $numeroMenor = $vetor[$i];
            for($j = $i - 1; $j >= 0 && $vetor[$j] > $numeroMenor; $j--){
                $vetor[$j + 1] = $vetor[$j];
                $vetor[$j] = $numeroMenor;
            }
        }
        return $vetor;
    }
    function mostrarArray($vetor){
        foreach($vetor as $dado){
            echo $dado . ", ";
        }
    }

    $vetorExemplo = [1, 6, 8, 9, 3, 4, 3, 2, 5, 6, -2, -5];
    echo "Vetor pré-organização: ";
    mostrarArray($vetorExemplo);
    echo "</br>";

    $vetorExemplo = ordenarNumero($vetorExemplo);
    echo "Vetor pós-organização: ";
    mostrarArray($vetorExemplo);
?>