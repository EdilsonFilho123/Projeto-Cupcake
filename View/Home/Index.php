<?php
    include("../../Model/Usuario.php");
    session_start();

    if(isset($_POST['email']) && isset($_POST['senha'])){
        include("../../ModelDAO/UsuarioDAO.php");
        $usu = new UsuarioDAO();
        $obj = $usu->logarUsuario($_POST['email'], $_POST['senha']);
        $_SESSION['usuario'] = new Usuario($obj->getNome(), $obj->getEmail(), $obj->getEmailRecuperacao());
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="shortcut icon" href="../../Midia/Imgs/cupcake1.png" type="image/x-icon">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleBase.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleNavBar.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleFooter.css">
    </head>

    <body>
        <header>
            <?php include("../../Layouts/PHP/NavBar.php"); ?>
        </header>

        <aside class="aside-left">
            
        </aside>

        <main>
            
        </main>

        <aside class="aside-right">
            <?php include("../../Layouts/PHP/Propaganda.php"); ?>
        </aside>

        <footer>
            <?php include("../../Layouts/PHP/Footer.php"); ?>
        </footer>
    </body>
</html>