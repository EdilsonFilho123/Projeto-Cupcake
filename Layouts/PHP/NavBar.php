<div class="nav">
    <nav>
        <ul>
            <li><a href="../../View/Home/">HOME</a></li>
            <li><a href="../../View/Cardapio/">CARDÁPIO</a></li>
            <li><a href="../../View/Customizar/">CUSTOMIZAR</a></li>
            <li><a href="../../View/Sobre/">SOBRE</a></li>
        </ul>
    </nav>
    <div class="login">
        <?php
            include_once("../../Model/Usuario.php");

            if(session_id() == null)
                session_start();
            
            // var_dump($_SESSION['usuario']);

            if(isset(($_SESSION['usuario'])))
                echo "<a href='../../View/Login/'><div id='circle' style='background-color: green'><img id='imgLogNav' style='width: 4vh' src='../../Midia/Imgs/usuario.png'></div></a>" . $_SESSION['usuario']->getNome();
            else
                echo "<a href='../../View/Login/'><div id='circle'></div></a>Login";
        ?>
        <!-- <div class="circle"></div>
        Login -->
    </div>
</div>