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
        $usuCtrl = new UsuarxioController();
        if(!$usuCtrl->existeEmail($_POST['email']))
            $msg = "Este Email já é esta cadastrado!!!";
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
        <link rel="shortcut icon" href="../../Midia/Imgs/icone.png" type="image/x-icon">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleBase.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleNavBar.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleFooter.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleAsideLeft.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleAsideRight.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <?php include("../../Layouts/PHP/NavBar.php"); ?>
        </header>

        <aside class="aside-left">
            <?php include("../../Layouts/PHP/AsideLeft.php"); ?>            
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
            <div class="login">
                <div class="formLogin">
                    <div class="logar">
                        <h2>Entrar</h2>
                        <br>
                        <form action="../Home/" method="post">
                            <div class="input-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha" required>
                            </div>
                            <br>
                            <button type="submit">Entrar</button>
                        </form>
                    </div>
                    <div class="hr"></div>
                    <div class="cadastrar">
                        <h2>Cadastrar</h2>
                        <br>
                        <form action="index.php" method="post">
                            
                            <div class="input-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <label for="emailRec">Email de <br>Recuperacao</label>
                                <input type="email" name="emailRec" id="emailRec" required>
                            </div>
                            <br>
                            <button type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <aside class="aside-right">
            <?php include("../../Layouts/PHP/AsideRight.php"); ?> 
        </aside>

        <footer>
            <?php include("../../Layouts/PHP/Footer.php"); ?>
        </footer>
    </body>
</html>