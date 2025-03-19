<?php
    /*6. Média de Notas dos Alunos
    Armazene as notas de 2 alunos (cada um com 3 notas) e exiba a média de cada um.*/

    $Alunos = [
        "Joaozinho" => array(0, 9, 5, 3, 9, 10), //o inidice [0] dessa array será a variavel que eu vou utilizar para armazenar a média do aluno
        "Guilherme" => array(0, 6, 9, 8)
    ];

    echo "Nota Alunos: </br></br>";
    foreach($Alunos as $aluno => $notas) {
        $tamanhoArrayNotas = count($notas);
        $notas[0] = 0;

        echo "Aluno: " . $aluno . "</br>";
        for($i = 1; $i < $tamanhoArrayNotas; $i++){
            echo " - Nota " . $i . ": " . $notas[$i] . "</br>";
            $notas[0] += $notas[$i];
        }
        $notas[0] = $notas[0]/(count($notas)-1);
        
        echo "- Média: " . number_format($notas[0], 2) . "</br></br>";
    }
?>