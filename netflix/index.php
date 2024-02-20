
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página principal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
            body{
                background-image: url("img/fundo netflix.jpg");
            }
            p{
                text-align: justify;
              font-family: 'Bebas Neue';

            }
            .aa{
                color: white;
                font-family: 'Bebas Neue';


            }
            .opa{

                background-color: rgba(0, 0, 0, 0.8);

            }
            .lembre{
                color:white;
                font-family: 'Bebas Neue';

            }
            img{
                width: 150px;
            }
        </style>

    </head>
    <body>
        
        <div class="navbar">
        <img src="img/logo netflix.png">
        </div>
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-4 ">
                <form  method="post" action="controller/loginController.php">   
                    <div class="row opa " style="border: 2px solid black;
                         margin: 30px 30px 30px 30px; padding: 20px ">
                        <div class="mb-3 mt-3">
                            <h1 class="aa">Entrar</h1><br>
                            <label for="email" class="aa">Email:</label>
                            <?php
                            if (isset($_COOKIE['email'])) {
                                echo('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email"
                            value="' . $_COOKIE['email'] . '" required="">');
                            } else {
                                echo('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email" required="">');
                            }
                            ?>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="senha"class="aa">Senha:</label>
                            <input type="password" class="form-control" id="senha" 
                                   placeholder="Senha" name="senha" required="">
                        </div>
                        <div class="d-grid">
                            <input type="submit" value="Entrar"
                                   class="btn btn-danger" >
                        </div>
                        <div class="d-grid">
                            <?php
                            if (isset($_COOKIE['email'])) {
                                echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                           name="lembrar" checked value="1">');
                            } else {
                                echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                           name="lembrar" value="1">');
                            }
                            ?>
                            <label for="lembrar" class="lembre">Lembre de mim</label>
                            <p>É novo aqui? <a href="cadastrar-se.php">Cadastre-se</a></p>
                            <?php
                            //capturavam a variável query string "cod"
                            @$cod = $_REQUEST['cod'];
                            if (isset($cod)) {
                                if ($cod == '171') {
                                    echo ('<br><div class="alert alert-danger">');
                                    echo ('Verifique usuário ou senha.');
                                    echo ('</div>');
                                } else if ($cod == '172') {
                                    echo ('<br><div class="alert alert-warning">');
                                    echo ('Sua sessão expirou. Realize o login novamente.');
                                    echo ('</div>');
                                }
                            }
                            ?>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-md-4"> </div>
        </div>
        <?php
        @session_start();
        if ($_SESSION) {
            echo('<li class="nav-item">
                        <a class="nav-link link-danger" 
                        style="text-decoration: none;"
                        href="controller/logoutController.php?cod=logout">Logout</a>
                        </li>');
        }
        ?>
    </ul>
</div>
</div>
<!-- FIM Menu -->
<!-- Corpo da página -->
<div class="row">
    <div class="col-md-12">
        </body>