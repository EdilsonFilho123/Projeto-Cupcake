<?php 
 
$url = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "bdcupcakeimagens"; 
 
$con = new mysqli($url, $usuario, $senha, $banco); 

if($con->connect_error) {
    die("Erro Fatal na conexão: " . $con->connect_error);
} 

?>