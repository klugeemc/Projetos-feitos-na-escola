<html>
    <head>
        <title>Cadastro</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/geral.css"/>
        <link rel="icon" type="image/x-icon" href="imgs/Cpm 23.png">
        <style>
            label{
                color:#C24600;
            }
            div{
                display: flex;
                justify-content: center;
                text-align: center;

            }
            h1{
                margin-top: 100px;
            }
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
            body{
                background-position-x: left;
              background-image: url(imgs/background.png);
            }
            a{
                background: none;
            }
        </style>
    </head>
    <body>
         <a href="home.php"><img src="imgs/logo.png" width="70px"></a>
        <h1>Cadastre-se</h1>
        <div>
            <form method = "post" action="controller/cadastroClienteController.php">
                <label for = "nome">Nome completo</label><br>
                <input type = "text" id = "nome" name = "nome"><br>
                <label for = "email">Email</label><br>
                <input type = "email" id = "email" name = "email"><br>
                <label for = "enderco">Endereço</label><br>
                <input type = "text" id = "endereco" name = "endereco"><br>
                <label for = "telefone">Telefone</label><br>

                <input type = "text" id = "telefone" name = "telefone"><br>
                <label for = "cpf">CPF</label><br>
                <input type = "text" id = "cpf" name = "cpf"><br>
                <label for = "senha">Senha</label><br>
                <input type = "password" id = "senha" name = "senha">
                <br>

                <input type = "submit" id = "enviar" name = "enviar" class="ola">

            </form>
        </div>
    </body>
</html>

