<?php
    include_once("../../Connection/ConnectBdCupcakeImagens.php");
    include_once("../../Model/Propaganda.php");

    class PropagandaDAO{

        public function salvarPropaganda($imagem){

            $conBdCup = new ConnectBdCupcakeImagens();
            $con = $conBdCup->bdCon();
            $bool = false;
            $idImg = 0;

            $nomeFinal = time() . '.jpg';
            if(move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {

                $tamanhoImg = filesize($nomeFinal);
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
                $tipo = $imagem["type"];

                $sql = "INSERT INTO imagem(conteudo, tipo) VALUES('$mysqlImg', '$tipo'); ";
                $sql2 = "SELECT MAX(id) FROM imagem;";

                try {
                    if($con->query($sql) === TRUE){
                        $resultQuery = $con->query($sql2);
                        if($resultQuery->num_rows > 0)
                            while($row = $resultQuery->fetch_assoc())
                                $idImg = $row['MAX(id)'];
                        else{
                            $idImg = 0;
                        }

                        $sql = "UPDATE propaganda SET propaganda.atual = '0' WHERE (propaganda.id >= 1); ";
                        
                        if($con->query($sql) === TRUE)
                            $bool = true;
                        else
                            $bool = false;
                        
                        $nome = $imagem["name"];
                        $sql = "INSERT INTO propaganda(nome, idImagem) VALUES('$nome', '$idImg');";

                        if($con->query($sql) === TRUE && $bool = true)
                            $bool = true;
                        else
                            $bool = false;
                    }
                    else
                        $bool = false;
                } 
                catch (Exception $e) {
                    $bool = false;
                }
                finally{
                    $con->close();
                }
            }
            return $bool;
        }

        public function puxarPropaganda(){
            $conBdCup = new ConnectBdCupcakeImagens();
            $con = $conBdCup->bdCon();

            $nome = null;
            $idImg = 0;
            $result = null;

            $sql = "SELECT * FROM propaganda WHERE propaganda.atual = '1'";

            try{
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc()){
                        $nome = $row['nome'];
                        $idImg = $row['idImagem'];
                    }
                else
                    $result = null;
                
                $sql = "SELECT * FROM imagem WHERE imagem.id = '$idImg'";
                
                $resultQuery = $con->query($sql);
                if($resultQuery->num_rows > 0)
                    while($row = $resultQuery->fetch_assoc())
                        $result = (object) new Propaganda($nome, $row['conteudo'], $row['tipo']);
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