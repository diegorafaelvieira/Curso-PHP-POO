<?php
/*
    public: permite acessar dentro da classe ou fora

    protected: permite que os herdeiros vejam as propriedades 

    private: permite somente seja visto somente pela classe que a declarou
*/

use Veiculo as GlobalVeiculo;

    class Veiculo {
        protected $modelo;
        public $cor;
        public $ano;

        public function Andar() {
            echo "Andou";
        }

        public function Parar() {
            echo "Parou";
        }

        public function setModelo($m) {
            $this->modelo = $m;
        }

        public function getModelo() {
            return $this->modelo;
        }
    }

    class Carro extends Veiculo {
        
        public function LigarLimpador() {
            echo "Limpando em 321";
        }
    }

    class Moto extends Veiculo {
        
        public function darGrau() {
            echo "Dando grau em 321";
        }
    }

    
    $veiculo = new Veiculo();
    $veiculo->setModelo("Hilux");
    echo $veiculo->getModelo();



?>