<?php
	include_once("../../Model/Usuario.php");

	if(session_id() == null)
	session_start();

	// if(!isset(($_SESSION['usuario']))){
	// 	header("location: ../Home/");
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forúm</title>
	<link rel="shortcut icon" href="../../Midia/Imgs/icone.png" type="image/x-icon">
	<link rel="stylesheet" href="../../Layouts/CSS/StyleBase.css">
	<link rel="stylesheet" href="../../Layouts/CSS/StyleNavBar.css">
	<link rel="stylesheet" href="../../Layouts/CSS/StyleFooter.css">
	<link rel="stylesheet" href="../../Layouts/CSS/StyleAsideLeft.css">
	<link rel="stylesheet" href="../../Layouts/CSS/StyleAsideRight.css">
	<link rel="stylesheet" href="style.css">

	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);

 
	</script>
</head>
<body onload="ajax();">
	<header>
		<?php include("../../Layouts/PHP/NavBar.php"); ?>
	</header>

	<aside class="aside-left">
		<?php include("../../Layouts/PHP/AsideLeft.php"); ?>            
	</aside>

	<main>
		<div id="chat"></div>

		<form method="post" id="formChat">
			<div class="input-group">
				<label for="mensagem">Mensagem</label>
				<input type="text" name="mensagem">
			</div>
			<button type="submit">Enviar</button>
		</form>

		<?php include("insert.php"); ?>
	</main>

	<aside class="aside-right">
		<?php include("../../Layouts/PHP/AsideRight.php"); ?> 
	</aside>

	<footer>
		<?php include("../../Layouts/PHP/Footer.php"); ?>
	</footer>
</body>
</html>