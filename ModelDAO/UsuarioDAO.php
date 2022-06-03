<?php
    include_once("../../Connection/ConnectBdCupcake.php");
    include_once("../../Model/Usuario.php");

    class UsuarioDAO{

        public function criarUsuario($nome, $email, $senha, $emailRecuperacao){

            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();
            
            $bool = false;
            $sql = "INSERT INTO usuario(nome, email, senha, emailRecuperacao) VALUES('$nome','$email','$senha','$emailRecuperacao')";

            try {
                if($con->query($sql) === TRUE)
                    $bool = true;
                else
                    $bool = false;
            } 
            catch (Exception $e) {
                $bool = false;
            }
            finally{
                $con->close();
            }

            return $bool;
        }

        public function logarUsuario($email, $senha){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $result = null;

            $sql = "SELECT * FROM usuario WHERE usuario.email = '$email' AND usuario.senha = '$senha'";

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc())
                        $result = new Usuario($row['nome'], $row['email'], $row['emailRecuperacao']);
                else
                    $result = null;
            } 
            catch (Exception $e) {
                $result = null;
            }
            finally{
                $con->close();
            }

            return $result;
        }
        
        public function deletarUsuario($email){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $bool = false;

            $sql = "DELETE FROM usuario WHERE usuario.email = '$email'";

            try {
                if($con->query($sql) === TRUE)
                    $bool = true;
                else
                    $bool = false;
            } 
            catch (Exception $e) {
                $bool = false;
            }
            finally{
                $con->close();
            }

            return $bool;
        }

        public function procurarUsuario($email){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $bool = false;

            $sql = "SELECT * FROM usuario WHERE usuario.email = '$email'";

            try {
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    $bool = false;
                else
                    $bool = true;
            } 
            catch (Exception $e) {
                $bool = false;
            }
            finally{
                $con->close();
            }

            return $bool;
        }

        public function verificaAdmin($email){
            echo "entro";
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $bool = false;

            $sql = "SELECT * FROM usuario WHERE usuario.email = '$email' AND usuario.nivel = 1";

            try {
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    $bool = true;
            } 
            catch (Exception $e) {
                $bool = false;
            }
            finally{
                $con->close();
            }

            return $bool;
        }
    }

?>