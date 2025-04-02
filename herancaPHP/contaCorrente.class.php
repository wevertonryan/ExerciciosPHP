<?php
    final class ContaCorrente extends Conta {
        public function __construct(private float $limite = 0, string $agencia, string $conta, float $saldo){
            parent:: __construct($agencia, $conta, $saldo);
        }

        public function getLimite() {
            return $this->limite;
        }
        public function setLimite($valor) {
            $this->limite = $valor;
        }

        public function sacar($valor) {
            if($this->saldo + $this->limite >= $valor){
                parent:: sacar($valor);
            } else {
                echo "Saldo Insuficiente!";
            }
        }
    }
?>