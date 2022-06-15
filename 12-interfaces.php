<?php

    interface Crud {
        public function create($data);
        public function read();
        public function update();
        public function delete();

    }

    class Noticias implements Crud {

        public function create($data) {
            //lógica para criar uma noticia
        }

        public function read() {
            //lógica para ler uma noticia
        }

        public function update() {
            //lógica para atualizar uma noticia
        }

        public function delete() {
            //lógica para deletar uma noticia
        }
    }
?>