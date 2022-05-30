<?php
    include_once("../Connection/ConnectBdCupcake.php");
    include_once("../Model/Historico.php");

    class HistoricoDAO{

        public function criarHistorico($datahora, $idPedido, $idCupcake){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();
            
            $bool = false;
            $sql = "INSERT INTO historico(datahora, idPedido, idCupcake) VALUES('$datahora', '$idPedido', '$idCupcake')";

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

        public function encontrarHistorico($idPedido){

            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();
            
            $result = null;
            $sql = "SELECT * FROM historico WHERE historico.idCupcake = '$idPedido'";

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc())
                        $result[] = array(new Historico($row['dataHora'], $row['idPedido'], $row['idCupcake']));
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