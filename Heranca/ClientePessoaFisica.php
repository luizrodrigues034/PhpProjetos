<?php

    class ClientePessoaFisica extends Cliente{
        public string $nome;
        public string $cpf;

        public function verInformacaoUsuario():string {
            
            $dados = "Rua: {$this->logadouro}<br>";
            $dados .= "Bairro: {$this->bairro}<br>";
            $dados .= "Nome: {$this->nome}<br>"; 
            //.= usado para cocatenação de strings;
            $dados .= "Cpf: {$this->cpf}<br>"; 
            return $dados;
         }
}
?>