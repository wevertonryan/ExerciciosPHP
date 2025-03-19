<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php
            /*1. Exibir um Vetor Simples
            Crie um vetor com 5 nomes e exiba-os em uma lista <ul> no HTML.*/
            $vetor = ["Weverton", "Gabriel", "Bruno", "Caina", "Outro Bruno"];
            foreach($vetor as $dado){
                echo "<li>$dado</li>";
            }
        ?>
    </ol>
</body>
</html>