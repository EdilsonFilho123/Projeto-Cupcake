<?php
    include_once("../../Model/Usuario.php");

    if(session_id() == null)
        session_start();
    
    if(isset($_SESSION['usuario'])){
        include("../../Controller/UsuarioController.php");
        $usu = new UsuarioController();
        if(!$usu->verificaAdmin($_SESSION['usuario']->getEmail()))
            header("location: ../Home/");
    }
    else{
        header("location: ../Home/");
    }

    if(isset($_FILES['imagem'])){
        $msg = null;
        include("../../Controller/PropagandaController.php");
        $pro = new PropagandaController();
        if($pro->salvarPropaganda($_FILES['imagem']))
            $msg = "Imagem cadastrada com sucesso!!!";
        else
            $msg = "Houve um erro ao cadastrar sua imagem, tente novamente mas se o erro persistir entre em contato com o desenvolvedor!!!";

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
        <title>Cardário</title>
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
            <h1>BEEEEMM VINDOOOOOO...</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="imagem">Imagem:</label>
                    <input type="file" name="imagem">
                </div>
                <br>
                <button type="submit">Salvar</button>
                <br>
            </form>
        </main>

        <aside class="aside-right">
            <?php include("../../Layouts/PHP/AsideRight.php"); ?> 
        </aside>

        <footer>
            <?php include("../../Layouts/PHP/Footer.php"); ?>
        </footer>
    </body>
</html>