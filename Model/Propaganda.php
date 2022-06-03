<?php
    class Propaganda{
        private $nome;
        private $conteudo;
        private $tipo;

        public function __construct($nomeP, $conteudoP, $tipoP){
            $this->nome = $nomeP;
            $this->conteudo = $conteudoP;
            $this->tipo = $tipoP;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nomeP){
            $this->nome = $nomeP;
        }

        public function getConteudo(){
            return $this->conteudo;
        }

        public function setConteudo($conteudoP){
            $this->conteudo = $conteudoP;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipoP){
            $this->tipo = $tipoP;
        }
    }
?>