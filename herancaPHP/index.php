<?php
    require_once("conta.class.php");
    require_once("contaPoupanca.class.php");
    require_once("contaCorrente.class.php");

    $minhaConta = new ContaCorrente(1000, "Will Smith", "James", 1000);
    echo "<pre>";
    echo var_dump($minhaConta);
    echo "</pre>";
    $minhaConta->sacar(3000);
    echo $minhaConta->getSaldo();
?>