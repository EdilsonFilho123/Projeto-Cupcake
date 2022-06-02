<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre</title>
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
            <br><br>
            <h1>SOBRE NÓS</h1>
            <br>

            <div class="divisaoSobre">
                
                <div class="SobreLeft">
                    <p>Somos uma empresa de cupcakes nascida do sonho de 6 jovens. Temos nossa matriz em Limeira - SP, mas já possuímos 3 filiais pelo estado, uma em Piracicaba, uma em Cordeirópolis e uma em Rio Claro.</p>
                </div>
                <div class="SobreRight">
                    <p>Nossos cupcakes são feitos com muito amor, mas também com muito cuidado e técnica. Venha visitar nossas lojas ou peça essas delicinhas na sua casa!! ツ</p>
                </div> 

            </div> 

            <p>....................................................................................................................................................................................................................................</p>
            
            <br>

            <h1>CONTATOS</H1>

            <br><br>

            <div class="divisaoSobre2">
                <a href="https://www.facebook.com/einstein.limeira">
                    <img src="../../Midia/Imgs/facebook.png" alt="Logo do Facebook">
                </a>

                <a href="https://www.instagram.com/einsteinlimeira/">
                    <img src="../../Midia/Imgs/instagram.png" alt="Logo do Instagram">
                </a>

                <a href="https://mobile.twitter.com/EinsteinLimeira?p=s">
                    <img src="../../Midia/Imgs/twitter.png" alt="Logo do Twitter">
                </a>
            </div> 
            
            <br><br>

            <div class="mapa">
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.6746879685693!2d-47.39956958449428!3d-22.553855831043762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8809056a21881%3A0x1c82f0fb0c889ee8!2sFaculdades%20Integradas%20Einstein%20de%20Limeira!5e0!3m2!1spt-BR!2sbr!4v1637893147677!5m2!1spt-BR!2sbr" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
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