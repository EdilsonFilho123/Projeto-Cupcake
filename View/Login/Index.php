<?php
    include_once("../../Model/Usuario.php");
    $msg = null;

    if(session_id() == null)
        session_start();

    if(isset(($_SESSION['usuario']))){
        header("location: ../Conta/");
    }
    
    if(isset($_POST['email'])){
        include_once("../../Controller/UsuarioController.php");
        $usuCtrl = new UsuarioController();
        if(!$usuCtrl->existeEmail($_POST['email']))
            $msg = "Este Email é esta cadastrado!!!";
        else
            if($usuCtrl->criarUsuario($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['emailRec']))
                $msg = "Conta cadastrada com sucesso!!!";
            else
                $msg = "Houve um erro ao cadastrar sua conta, tente novamente mas se o erro persistir entre em contato!!!";

        echo "<script type='text/javascript'> alert('" . $msg . "'); </script>";
        $msg = null;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="shortcut icon" href="../../Midia/Imgs/cups.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleBase.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleNavBar.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleFooter.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <?php include("../../Layouts/PHP/NavBar.php"); ?>
        </header>

        <aside class="aside-left">
            
        </aside>

        <main>
            <?php
                // if(isset($_POST['email']) && isset($_POST['senha'])){
                //     include("../../ModelDAO/UsuarioDAO.php");
                //     $usu = new UsuarioDAO();
                //     $obj = $usu->logarUsuario($_POST['email'], $_POST['senha']);
                //     echo $obj->getNome();
                //     $_SESSION['usuario'] = new Usuario($obj->getNome(), $obj->getEmail(), $obj->getEmailRecuperacao());
                // }
            ?>

            <h2>Logae mermão</h2><br>
            <form action="../Home/" method="post">
                <br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <br>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
                <br>
                <button type="submit">Logar</button>
            </form>

            <br><br>

            <hr>

            <br><br>

            <h2>Cadastrae mermão</h2><br>
            <form action="index.php" method="post">
                <br>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
                <br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <br>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>
                <br>
                <label for="emailRec">Email de Recuperacao</label>
                <input type="email" name="emailRec" id="emailRec" required>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </main>

        <aside class="aside-right">
            <?php include("../../Layouts/PHP/Propaganda.php"); ?>
        </aside>

        <footer>
            <?php include("../../Layouts/PHP/Footer.php"); ?>
        </footer>
    </body>
</html>