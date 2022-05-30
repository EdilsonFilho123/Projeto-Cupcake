<?php
    class Cupcake{

        private $nome;
        private $Cobertura;
        private $Granulado;
        private $Massa;
        private $Recheio;

        public function __construct($nomeP, $CoberturaP, $GranuladoP, $MassaP, $RecheioP){
            $this->nome = $nomeP;
            $this->Cobertura = (object) $CoberturaP;
            $this->Granulado = (object) $GranuladoP;
            $this->Massa = (object) $MassaP;
            $this->Recheio = (object) $RecheioP;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nomeP){
            $this->nome = $nomeP;
        }

        public function getCobertura(){
            return $this->Cobertura;
        }

        public function setCobertura($CoberturaP){
            $this->Cobertura = (object) $CoberturaP;
        }

        public function getGranulado(){
            return $this->Granulado;
        }

        public function setGranulado($GranuladoP){
            $this->Granulado = (object) $GranuladoP;
        }

        public function getMassa(){
            return $this->Massa;
        }

        public function setMassa($MassaP){
            $this->Massa = (object) $MassaP;
        }

        public function getRecheio(){
            return $this->Recheio;
        }

        public function setRecheio($RecheioP){
            $this->Recheio = (object) $RecheioP;
        }
    }
?>