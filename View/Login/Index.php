<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cardário</title>
        <link rel="shortcut icon" href="../../Midia/Imgs/cups.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleBase.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleNavBar.css">
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
                if(isset($_POST['email']) && isset($_POST['senha'])){
                    include("../../ModelDAO/UsuarioDAO.php");
                    $usu = new UsuarioDAO();
                    $obj = $usu->logarUsuario($_POST['email'], $_POST['senha']);
                    echo $obj->getNome();
                }
            ?>

            <h2>Logae mermão</h2><br>
            <form action="" method="post">
                <br>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <br>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
                <br>
                <button type="submit">ecvhgrggh</button>
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