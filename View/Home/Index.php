<?php
    include("../../Model/Usuario.php");
    if(session_id() == null)
        session_start();

    if(isset($_POST['email']) && isset($_POST['senha'])){
        include("../../Controller/UsuarioController.php");
        $usu = new UsuarioController();
        $obj = $usu->logarUsuario($_POST['email'], $_POST['senha']);
        if($obj !== null){
            $_SESSION['usuario'] = new Usuario($obj->getNome(), $obj->getEmail(), $obj->getEmailRecuperacao());
            if($usu->verificaAdmin($_SESSION['usuario']->getEmail()))
                header("location: ../Admin/");
        }
        else{
            echo "<script type='text/javascript'> alert('Email ou Senha Incorreta!!!'); </script>";
            $_SESSION['usuario'] = null;
        }
    }

    if(isset($_POST['logout'])){
        unset($_SESSION['usuario']);
        unset($_POST['logout']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="shortcut icon" href="../../Midia/Imgs/icone.png" type="image/x-icon">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleBase.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleNavBar.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleFooter.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StylePropaganda.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleAsideLeft.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleNovidades.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <?php include("../../Layouts/PHP/NavBar.php"); ?>
        </header>

        <aside class="aside-left">
            <?php include("../../Layouts/PHP/Novidades.php"); ?>
        </aside>

        <main>
            <div class="home">

                <div class="logo">
                    <img id="logo" src="../../Midia/Imgs/logonome.png" alt="Logo">
                </div>

                <div class="textoHome">
                    <h2>NOSSOS CUPCAKES</h2><br>

                    <h3>Fresquinhos e Deliciosos!</h3>

                    <p>Nossos produtos s??o produzidos diariamente com ingrediantes de alta qualidade para garantir que estejam sempre bem frescos e o mais gostoso poss??vel.</p>
                    <br>
                    <p>Tudo o que fazemos com amor e carinho fica uma del??cia e os nossos cupcakes est??o recheados com todo esse amor.</p>
                    <br>
                    <p>Esse ?? o nosso diferencial, al??m de produtos naturais e de qualidade, cada receita tem sua caracter??stica pr??pria, mas todas t??m uma qualidade em comum, o carinho que colocamos em cada produto! ???</p>
                    <br>
                    <p>Aproveite o Dia dos Namorados que est?? chegando e monte sua cesta com os sabores preferidos do seu parceiro(a)!</p>
                </div> 
            </div>
        </main>

        <aside class="aside-right">
            <?php include("../../Layouts/PHP/Propaganda.php"); ?>
        </aside>

        <footer>
            <?php include("../../Layouts/PHP/Footer.php"); ?>
        </footer>
    </body>
</html>