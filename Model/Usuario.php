<?php
    class Usuario{

        private $nome;
        private $email;
        private $emailRecuperacao;

        public function __construct($nomeP, $emailP, $emailRecuperacaoP){
            $this->nome = $nomeP;
            $this->email = $emailP;
            $this->emailRecuperacao = $emailRecuperacaoP;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nomeP){
            $this->nome = $nomeP;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($emailP){
            $this->email = $emailP;
        }

        public function getEmailRecuperacao(){
            return $this->emailRecuperacao;
        }

        public function setEmailRecuperacao($emailRecuperacaoP){
            $this->emailRecuperacao = $emailRecuperacaoP;
        }
    }
?>