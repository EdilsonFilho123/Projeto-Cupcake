<?php
    include_once("../Connection/ConnectBdCupcake.php");

    class CupcakeDAO{
        public function criarCupcake($nome, $idCobertura, $idGranulado, $idMassa, $idRecheio){

            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();
            
            $bool = false;
            $sql = "INSERT INTO cupcake(nome, idCobertura, idGranulado, idMassa, idRecheio) VALUES('$nome', '$idCobertura', '$idGranulado', '$idMassa', '$idRecheio')";

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

        public function PegarCupcake($id){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $result = null;

            $sql = "SELECT * FROM cupcake WHERE cupcake.id = '$id'";

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc())
                        $result = [
                            "nome" => $row['nome'],
                            "idCobertura" => $row['idCobertura'],
                            "idGranulado" => $row['idGranulado'],
                            "idMassa" => $row['idMassa'],
                            "idRecheio" => $row['idRecheio'],
                        ];
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