<?php

    class Disciplina
    {
        //public string $aluno;
        //public float $notaTrabalho;
        //public float $notaProva;
        public static $media=0;

        /*function __construct(string $aluno, float $notaTrabalho, float $notaProva){
            $this->aluno = $aluno;
            $this->notaTrabalho= $notaTrabalho;
            $this->notaProva= $notaProva;
            self::$media = $this->notaTrabalho + $this->notaProva;
        }*/
        function __construct(public string $aluno, public float $notaTrabalho, public float $notaProva){
            self::$media = $this->notaTrabalho + $this->notaProva;
        }

        public function situacao(){
            if(self::$media >= 7){
                return "Aluno(a) {$this->aluno}, está aprovado, com média de ".self::$media."<hr>";
            }else{
                return "Aluno(a) {$this->aluno}, está reprovado, com média de ".self::$media."<hr>";
            }
            
        }
        //método estático
        static function situacaoAluno(float $nota):string{
            if($nota >= 7){
                return "Aluno(a) está aprovado, com nota de ".$nota;
            }else{
                return "Aluno(a) está reprovado, com nota de ".$nota;
            } 
        }
    }