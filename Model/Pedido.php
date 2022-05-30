<?php
    class Pedido{
        private $estado;

        public function __construct($estadoP){
            $this->estado = $estadoP;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function setEstado($estadoP){
            $this->estado = $estadoP;
        }
    }
?>