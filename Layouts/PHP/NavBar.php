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
            session_start();
            if(isset(($_SESSION['usuario'])))
                echo "<a href='../../View/Login/'><div class='circle' style='background-color: green'></div></a>" . $_SESSION['usuario']->getNome();
            else
                echo "<a href='../../View/Login/'><div class='circle'></div></a>Login";
        ?>
        <!-- <div class="circle"></div>
        Login -->
    </div>
</div>