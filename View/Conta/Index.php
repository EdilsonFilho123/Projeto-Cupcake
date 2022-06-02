<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sua Conta</title>
        <link rel="shortcut icon" href="../../Midia/Imgs/icone.png" type="image/x-icon">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleBase.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleNavBar.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleAsideLeft.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleAsideRight.css">
        <link rel="stylesheet" href="../../Layouts/CSS/StyleFooter.css">
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
            <h1>Desconectar...</h1>
            <br>
            <form action="../Home/" method="post">
                <input type="hidden" name="logout" id="logout" value="logout">
                <button class='btn'>Logout</button>
            </form>
            <br>
            <hr>
        </main>

        <aside class="aside-right">
            <?php include("../../Layouts/PHP/AsideRight.php"); ?> 
        </aside>

        <footer>
            <?php include("../../Layouts/PHP/Footer.php"); ?>
        </footer>
    </body>
</html>