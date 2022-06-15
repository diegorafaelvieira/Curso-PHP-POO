<?php

    class Login {
        //Atributo estático
        public static $user;

        //Método estático
        public static function verificaLogin() {
            echo "O usuário ".self::$user." está logado!";
        }

        public function sairSistema() {
            echo "O usuário deslogou";
        }
    }

    login::$user = "admin";
    Login::verificaLogin();
    

?>