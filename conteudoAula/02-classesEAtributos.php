<?php
 
    //Classe
    class Pessoa {
        //Atributos
        public $nome;
        public $idade;
        
        //Métodos
        public function Falar() {
            echo $this->nome." de ".$this->idade." acabou de falar";
        }
    }

    //Instânciar Classe
    $diego = new Pessoa();
    $diego->nome = "Diego Rafael Vieira";
    $diego->idade = 37;
    $diego->Falar();

    
?>