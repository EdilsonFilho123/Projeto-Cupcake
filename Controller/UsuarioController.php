<?php
    include_once("../../ModelDAO/UsuarioDAO.php");

    class UsuarioController{
        public function criarUsuario($nome, $email, $senha, $emailRecuperacao){
            $dao = new UsuarioDAO();
            $bool = $dao->criarUsuario($nome, $email, $senha, $emailRecuperacao);
            return $bool;
        }

        public function logarUsuario($email, $senha){
            $dao = new UsuarioDAO();
            $usuario = $dao->logarUsuario($email, $senha);
            return $usuario;
        }
        
        public function deletarUsuario($email){
            $dao = new UsuarioDAO();
            $bool = $dao->deletarUsuario($email);
            return $bool;
        }
        
        public function existeEmail($email){
            $dao = new UsuarioDAO();
            $bool = $dao->procurarUsuario($email);
            return $bool;
        }
        
        public function verificaAdmin($email){
            $dao = new UsuarioDAO();
            $bool = $dao->verificaAdmin($email);
            return $bool;
        }
    }
?>