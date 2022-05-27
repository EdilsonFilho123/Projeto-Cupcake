<?php
    class Itens{
        private $nome;
        private $idImagem;

        public function __construct($nomeP, $idImagemP){
            $this->nome = $nomeP;
            $this->idImagem = $idImagemP;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nomeP){
            $this->nome = $nomeP;
        }

        public function getIdImagem(){
            return $this->idImagem;
        }

        public function setIdImagem($idImagemP){
            $this->idImagem = $idImagemP;
        }
    }
?>