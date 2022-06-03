<?php
    include("../../Connection/bd_conect.php");
    
    if(session_id() == null)
	    session_start();

	if(!isset(($_SESSION['usuario']))){
		header("location: ../Home/");
	}

    if(isset($_POST['mensagem'])){
        $nome = $_SESSION['usuario']->getNome();
        $mensagem = $_POST['mensagem'];
        $sql = $pdo->query("INSERT INTO chat1 SET nome = '$nome', mensagem = '$mensagem'");
    }
?>