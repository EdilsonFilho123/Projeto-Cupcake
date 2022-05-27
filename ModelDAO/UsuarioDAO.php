<?php
    include_once("../Connection/ConnectBdCupcake.php");
    include_once("../Model/Usuario.php");

    class UsuarioDAO{

        public function criarUsuario($nome, $email, $senha, $emailRecuperacao){

            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();
            
            $bool = false;
            $sql = "INSERT INTO usuario(nome, email, senha, emailRecuperacao) VALUES('$nome','$email','$senha','$emailRecuperacao')";

            try {
                echo"try";
                if($con->query($sql) === TRUE){
                    $bool = true;
                    echo"if";
                }
                else{
                    $bool = false;
                    echo"else";
                }
            } 
            catch (Exception $e) {
                $bool = false;
                echo"cacth";
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
    }

    //TÉSTÊS
    $testado = new UsuarioDAO();

    $bola = $testado->criarUsuario("KleberThompson", "kleberThompson@gov-limeira", "1234abc", "adailsonMatte@outlook.com");
    // echo $bola;
    $teste = $testado->logarUsuario('kleberThompson@gov-limeira', '1234abc');
    echo $teste->getNome();
    // var_dump($teste);
?>