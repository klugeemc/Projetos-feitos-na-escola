<?php

require_once("/model/cadastroModel.php");

//Se vier qualquer coisa via get
if ($_POST) {
    //print_r($_GET);
    //entra aqui e pega os valores.
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $c = new usuarios($email, $senha);
    if ($c->validar()) {
        session_start();
        $_SESSION['login'] = $email;
        
        header('location:../home.php');
    } else {
        //Login inválido 
        header('location:../index.php?cod=171');
    }
} else {
    //redireciona para a index
    header('location:../index.php');
}
?>