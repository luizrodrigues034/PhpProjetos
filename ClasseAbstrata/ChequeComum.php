<?php
    class ChequeComum extends Cheque{
        public function calcularJuros(){
            //usamos o parent:: para acessar um método que esteja na classe Pai a partir de uma classe Filha
            //$valorConvReal = parent::converterReal($this->valor);
            $valorConvReal = $this->converterReal($this->valor);
            //No código superior estou acessando um método da classe pai para utilizar o método conversor de real, usando este método 
            //passo como parametro a o this-valor, para que o método formate o valor da classe automaticamente.

            return "Valor do cheque {$this->tipo} é R$ {$valorConvReal}<br>";
        }
    }