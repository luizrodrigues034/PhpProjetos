<?php
   abstract class Cheque{
     /*
        public float $valor;
        public string $tipo;

        //
        public function __construct(float $valor, string $tipo){
            $this->valor= $valor;
            $this->tipo= $tipo;
        }
*/
        public function __construct(public float $valor, public string $tipo)
        {   
        }
        
/*        public function verValor():string{
            return "Valor do cheque ".$this->tipo." é R$".$this->valor."<br>";
        }
  */    
        public function converterReal(float $valor):string{
            return number_format($valor, '2', ',', '.');
            
        }

        //Na forma abaixo estamos criando uma classe abstrata, obrigando todos as classes filhas dela a utilizala
        abstract function calcularJuros();
    }