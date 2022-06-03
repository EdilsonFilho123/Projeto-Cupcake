<?php 
 
 class ConnectBdCupcakeImagens{
        
    public function bdCon(){
        $url = "localhost"; 
        $usuario = "root"; 
        $senha = ""; 
        $banco = "bdcupcakeImagens"; 
        
        $con = new mysqli($url, $usuario, $senha, $banco); 

        if($con->connect_error) {
            die("Erro Fatal na conexão: " . $con->connect_error);
        } 

        return $con;
    }
}

?>