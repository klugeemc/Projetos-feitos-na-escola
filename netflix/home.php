<!doctype html>
<html>
    <head>
        <title>Home</title>

    </head>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        img{
            width: 300px;
        }
        .opa{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            margin-top: 100px;

        }
        p{
            color: white;
            font-size: 20px;
            text-align: center;
            font-family: 'Bebas Neue', sans-serif;

        }
        body{
            background-color: black;
        }
        .voltar{
            margin-top: 30px;
            font-size: 20px;
            color:white;
           
            border-radius: 10%; margin: 30px;
            padding: 10px;
            font-family: 'Bebas Neue', sans-serif;

        }
         .logo{
                width: 150px;
            }
            .a{
                display: flex;
                align-items: row;
            }
    </style>
    <body>
      <div class="a">
        <img src="img/logo netflix.png " class="logo">
       
            <a href="index.php" ><button class="btn btn-primary">Voltar</button>
            <a href="controller/logoutController.php" ><button class="btn btn-danger">Sair</button></a>
            </div>
       
        <?php
        $result = array(
            array('nome' => 'Mariazinha', 'imagem' => './img/perfil 1.jpg', 'pagina' => 'filmes.php?cod=01'),
            array('nome' => 'Kauezinho', 'imagem' => './img/perfil 2.png', 'pagina' => 'filmes.php?cod=02'),
            array('nome' => 'Infantil', 'imagem' => './img/infantil.png', 'pagina' => 'filmes.php?cod=03'),
            array('nome' => 'Adicionar perfil', 'imagem' => './img/adicionar perfil.jpg', 'pagina' => 'cadastrar perfil.php'),
        );
        echo ('<div class="opa">');
        foreach ($result as $aaa) {

            echo('<a href="' . $aaa['pagina'] . '">');
            echo ('<img src="' . $aaa['imagem'] . '">');
            echo ('<p>' . $aaa['nome'] . '</p>');
            echo ('</a>');
        }
        echo ('</div>');
        ?>
    </body>
</html>
