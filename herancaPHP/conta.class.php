<?php
    abstract class Conta {
        public function __construct(
        protected string $agencia = "", 
        protected string $conta = "", 
        protected float $saldo = 0.00){}

        public function getAgencia() {
            return $this->agencia;
        }
        public function setAgencia($valor) {
            $this->agencia = $valor;
        } 

        public function getConta() {
            return $this->conta;
        }
        public function setConta($valor) {
            $this->conta = $valor;
        }  

        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($valor) {
            $this->saldo = $valor;
        }  

        public function sacar($valor) {
            $this->saldo -= $valor;
        }
    }
?>