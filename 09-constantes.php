<?php

use Pessoa as GlobalPessoa;

    class Pessoa {
        //constante
        const nome = "Diego";


        public function exibirNome() {
            echo self::nome;
        }
    }

    
    class Diego extends Pessoa {

        const nome = "Rafael";

        public function exibirNome() {
            echo parent::nome;
        }
    }

    $diego = new Diego();
    $diego->exibirNome();

?>