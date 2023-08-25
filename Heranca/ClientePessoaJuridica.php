<?php

    class ClientePessoaJuridica extends Cliente{
        public string $empresa;
        public string $cnpj;

        public function verInformacaoUsuario():string {
            
            $dados = "Rua: {$this->logadouro}<br>";
            $dados .= "Bairro: {$this->bairro}<br>";

            $dados .= "Nome: {$this->empresa}<br>"; 
            //.= usado para cocatenação de strings;
            $dados .= "Cnpj: {$this->cnpj}<br>"; 
            return $dados;
         }
}
?>