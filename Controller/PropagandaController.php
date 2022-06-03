<?php
    include_once("../../ModelDAO/PropagandaDAO.php");

    class PropagandaController{
        public function salvarPropaganda($imagem){
            $dao = new PropagandaDAO();
            $bool = $dao->salvarPropaganda($imagem);
            return $bool;
        }

        public function puxarPropaganda(){
            $dao = new PropagandaDAO();
            $propaganda = $dao->puxarPropaganda();
            return $propaganda;
        }
    }
?>