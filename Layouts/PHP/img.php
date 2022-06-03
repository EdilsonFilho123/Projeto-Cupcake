<?php
    include("../../Controller/PropagandaController.php");
    include_once("../../Model/Propaganda.php");
    $props = new PropagandaController();
    $obj = $props->puxarPropaganda();
    if(isset($obj)){
        header("Content-type: image/png");
        echo $obj->getConteudo();
    }
    else{
        include("../../Midia/Imgs/promocaosexta.png");
    }
?>