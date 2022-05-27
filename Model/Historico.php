<?php
    class Historico{

        private $dataHota;
        private $idPedido;
        private $idCupcake;

        public function __construct($dataHotaP, $idPedidoP, $idCupcakeP){
            $this->dataHota = $dataHotaP;
            $this->idPedido = $idPedidoP;
            $this->idCupcake = $idCupcakeP;
        }

        public function getDataHota(){
            return $this->dataHota;
        }

        public function setDataHota($dataHotaP){
            $this->dataHota = $dataHotaP;
        }

        public function getIdPedido(){
            return $this->idPedido;
        }

        public function setIdPedido($idPedidoP){
            $this->idPedido = $idPedidoP;
        }

        public function getIdCupcake(){
            return $this->idCupcake;
        }

        public function setIdCupcake($idCupcakeP){
            $this->idCupcake = $idCupcakeP;
        }
    }
?>