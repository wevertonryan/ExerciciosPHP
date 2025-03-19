<?php
    /*10. Criar uma Agenda Simples
    Crie uma matriz nomeada para armazenar 3 contatos (nome, telefone e e-mail) e exiba os dados acessando os índices diretamente.*/

    $Pessoas = [
        [
            "nome" => "James",
            "telefone" => "14 99999-9999",
            "email" => "a@gmail.com"
        ], 
        [
            "nome" => "Bond",
            "telefone" => "14 88888-8888",
            "email" => "b@gmail.com"
        ], 
        [
            "nome" => "Silva",
            "telefone" => "14 77777-7777",
            "email" => "c@gmail.com"
        ]
    ];

    foreach($Pessoas as $pessoa) {
        echo "Nome: " . $pessoa["nome"] . "</br>";
        echo "Telefone: " . $pessoa["telefone"] . "</br>";
        echo "Email: " . $pessoa["email"] . "</br></br>";
    }
?>