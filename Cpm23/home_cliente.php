<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página principal</title>
        <link rel="stylesheet" href="css/geral.css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/x-icon" href="imgs/Cpm 23.png">
        <style>
            .ola{
                border: none;
                color: white;
                margin-bottom: 4px;
                width: 60px;
                text-align: center;
                background-color: #E8640D;
                border-radius: 40px;
                border-top: 5px;
                border-bottom: 5px;
                margin-top: 5px;
            }
            label{

            }
            .container{
                width: 400px;
                display: flex;
                justify-content: center;
            }
            body{
                background-position-x: left;
              background-image: url(imgs/background.png);
            }
            a{
                background: none;
            }
             div{
                display: flex;
                margin-top: 30px;
                margin-left: 30px;
            }
        </style>
    </head>
    <body>
        <div>
        <a class="btn btn-danger" href="controller/logoutController.php">Sair</a>
        </div>
        <br>
        <h1>Pedir prato</h1>
        <div class="container">
            <form method="post" action="pratos.php">
                <label for="nome">Pesquise por nome do prato</label>
                <input type="text" class="form-control" name="nome-prato">
                <label for="nome">Pesquise por nome do cozinheiro</label>
                <input type="text" class="form-control" name="nome-cozinheiro">
                <label for="nome">Pesquise por ingredientes</label>
                <input type="text" class="form-control" name="ingrediente">
               
                    <input type="submit" value="Buscar" class="ola d-grid">
                

            </form>
        </div>
    </body>
</html>
