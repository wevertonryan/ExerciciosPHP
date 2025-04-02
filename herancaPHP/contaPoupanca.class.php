<?php
    class ContaPoupanca extends Conta {
        public function __construct(private int $aniversario = 0, string $agencia, string $conta, float $saldo){
            parent:: __construct($agencia, $conta, $saldo);
        }

        public function getLimite() {
            return $this->aniversario;
        }
        public function setLimite($valor) {
            $this->agencia = $valor;
            $this->aniversario = $valor;
        }

        public function teste() {
            echo $this->agencia;
        }

        public function sacar($valor) {
            $dataAtual = explode("/", date("d/m/Y"));
            if($this->aniversario <= $dataAtual[0] && $valor <= $this->saldo){
                parent:: sacar($valor);
            } else {
                echo "Ainda não é tempo! aguarde até {$this->aniversario}/{$dataAtual[1]}/{$dataAtual[2]}";
            }
        }
    }
?>