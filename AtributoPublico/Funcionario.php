<?php
/**
 * Undocumented class
 *A classe funcionario calcula o salário do colaborador
 * 
 * @author Luiz <luizrodriguescode@gmail.com>
 */
    class Funcionario
    {
        /** @var string $nome Recebe o nome do colaborador */
       public string $nome;
        public float $salario;
        private string $salarioConvertido;

        public function verSalario():string
        {
            return "O salário do funcionário {$this->nome}, é {$this->salario}<br><hr>";
        }
        private function converterSalario()
        {
            $this->salarioConvertido = number_format($this->salario,'2', ',', '.');
            return $this->salarioConvertido;
        }
    }