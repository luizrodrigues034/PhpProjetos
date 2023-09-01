<?php
    class CursoPosGraduacao implements iCurso{

        public string $nomeDisciplina;
        public string $nomeProfessor;
        public function disciplina(string $nomeDisciplina):string{
            $this->nomeDisciplina = $nomeDisciplina;
            return "O O nome da disciplina é {$this->nomeDisciplina}<br>";
        }
        public function professor(string $nomeProfessor):string{
            $this->nomeProfessor = $nomeProfessor;
            return "O nome do professor(a) é {$this->nomeProfessor}<hr>";
        }
    }
?>