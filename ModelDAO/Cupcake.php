<?php
    class Cupcake{

        private $nome;
        private $idCobertura;
        private $idGranulado;
        private $idMassa;
        private $idRecheio;

        public function __construct($nomeP, $idCoberturaP, $idGranuladoP, $idMassaP, $idRecheioP){
            $this->nome = $nomeP;
            $this->idCobertura = $idCoberturaP;
            $this->idGranulado = $idGranuladoP;
            $this->idMassa = $idMassaP;
            $this->idRecheio = $idRecheioP;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nomeP){
            $this->nome = $nomeP;
        }

        public function getIdCobertura(){
            return $this->idCobertura;
        }

        public function setIdCobertura($idCoberturaP){
            $this->idCobertura = $idCoberturaP;
        }

        public function getIdGranulado(){
            return $this->idGranulado;
        }

        public function setIdGranulado($idGranuladoP){
            $this->idGranulado = $idGranuladoP;
        }

        public function getIdMassa(){
            return $this->idMassa;
        }

        public function setIdMassa($idMassaP){
            $this->idMassa = $idMassaP;
        }

        public function getIdRecheio(){
            return $this->idRecheio;
        }

        public function setIdRecheio($idRecheioP){
            $this->idRecheio = $idRecheioP;
        }
    }
?>