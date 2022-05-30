<?php
    include_once("../Connection/ConnectBdCupcake.php");
    include_once("../Model/Pedido.php");

    class PedidoDAO{

        public function criarPedido($estado, $email){

            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();
            
            $bool = false;
            $sql = "INSERT INTO pedido(estado, idUsuario) VALUES('$estado', (select id from usuario where email = '$email'))";

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

        public function listarPedidos($email){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $result = null;

            $sql = "SELECT * FROM pedido WHERE pedido.idUsuario = (select id from usuario where email = '$email')";

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc())
                        $result[] = array(new Pedido($row['estado']));
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
        
        public function alterarPedido($estado, $id){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $bool = false;

            $sql = "UPDATE pedido SET pedido.estado = '$estado' WHERE (pedido.id = '$id')";

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

        public function listarIds($email){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $result = null;

            $sql = "SELECT * FROM pedido WHERE pedido.idUsuario = (select id from usuario where email = '$email')";

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc())
                        $result[] = array(new Pedido($row['id']));
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

        public function pegarEstadoPedido($id){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $result = null;

            $sql = "SELECT * FROM pedido WHERE pedido.id = '$id'";

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc())
                        $result = (object) new Pedido($row['estado']);
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
?>