<?php
	try {
		$dns = "mysql:dbname=chatsimples;host=localhost";
		$user = "root";
		$pass = "";
		$pdo = new PDO($dns, $user);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}catch (Exception $p){
		echo "<h1> Erro no BANCO </h1> ";
	}
?>