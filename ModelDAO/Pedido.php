<?php
    class Pedido{
        private $estado;
        private $idUsuario;

        public function __construct($estadoP, $idUsuarioP){
            $this->estado = $estadoP;
            $this->idUsuario = $idUsuarioP;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function setEstado($estadoP){
            $this->estado = $estadoP;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setIdUsuario($idUsuarioP){
            $this->idUsuario = $idUsuarioP;
        }
    }
?>