<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*9. Criar um Vetor de Cores e Exibi-las em HTML
        Crie um vetor de cores e use-o para exibir quadrados coloridos (<div style="width:50px; height:50px; background-color:cor;"></div>).*/
        $Cores = ["#0000ff", "#00ff00", "#ff0000", "#000000", "#aaaaaa"];
        $quantidade = count($Cores);

        foreach($Cores as $cor){
            echo '<div style="width:50px; height:50px; background-color:' . $cor . ';"></div>';
        }
    ?>
</body>
</html>