<?php
    class CursoGraduacao implements iCurso{
        public string $nomeDisciplina;
        public string $nomeProfessor;

        public function disciplina(string $nomeDisciplina){
            $this->nomeDisciplina = $nomeDisciplina;
            return "O nome da disciplina é {$this->nomeDisciplina}<br>";
        }
        public function professor(string $nomeProfessor){
            $this->nomeProfessor = $nomeProfessor;
            return "O nome do professor(a) é {$this->nomeProfessor}<hr>";
        }
    }
?>