<?php
    class Itens{
        private $nome;
        private $imagem;
        private $tipo;

        public function __construct($nomeP, $imagemP, $tipoP){
            $this->nome = $nomeP;
            $this->imagem = $imagemP;
            $this->tipo = $tipoP;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nomeP){
            $this->nome = $nomeP;
        }

        public function getImagem(){
            return $this->imagem;
        }

        public function setImagem($imagemP){
            $this->imagem = $imagemP;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipoP){
            $this->tipo = $tipoP;
        }
    }
?>