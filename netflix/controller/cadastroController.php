<?php
if ($_POST) {
    print_r($_POST);
    require_once("../model/cadastroModel.php");
    
    $c = new Usuarios($_POST["nome"], $_POST["email"], $_POST["senha"]);
    $c->inserir();
}
?>