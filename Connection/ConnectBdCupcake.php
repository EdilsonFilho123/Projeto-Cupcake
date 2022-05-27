<?php 
    class ConnectBdCupcake{
        
        public function bdCon(){
            $url = "localhost"; 
            $usuario = "root"; 
            $senha = ""; 
            $banco = "bdcupcake"; 
            
            $con = new mysqli($url, $usuario, $senha, $banco); 

            if($con->connect_error) {
                die("Erro Fatal na conexão: " . $con->connect_error);
            } 

            return $con;
        }
    }
?>