<?php
    include_once("../Connection/ConnectBdCupcake.php");
    include_once("../Connection/ConnectBdCupcakeImagens.php");
    include_once("../Model/Itens.php");

    class ItensDAO{
        public function criarItem($tipo, $nome, $idImagem){

            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();
            
            $bool = false;
            $sql = "INSERT INTO " . $tipo . "(nome, idImagem) VALUES('$nome', '$idImagem')";

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

        public function pegarImagem($id){
            $conBdCupImg = new ConnectBdCupcakeImagens();
            $con = $conBdCupImg->bdCon();

            $result = null;

            $sql = "SELECT * FROM imagem WHERE id = '$id'";

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc())
                        $result = [
                            "conteudo" => $row['conteudo'],
                            "tipo" => $row['tipo']
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

        public function listarItem(){
            $conBdCup = new ConnectBdCupcake();
            $con = $conBdCup->bdCon();

            $result = null;

            $sql = "SELECT * FROM " . $tipo;

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc()){
                        $img = pegarImagem($row['idImagem']);
                        if($img != null)
                            $result = [
                                "nome" => $row['nome'],
                                "imagem" => $img['conteudo'],
                                "tipo" => $img['tipo']
                            ];
                        else
                            $result = null;
                    }
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