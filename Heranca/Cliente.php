<?php
    class Cliente{
        public string $logadouro;
        public string $bairro;
        
        public function verEndereco():string{
            return "<p>{$this->logadouro}<br> {$this->bairro}</p>";
        }
    }