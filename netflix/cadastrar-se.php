<html>
    <head>
        <title>Cadastrar-se</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
            body{
                background-image: url("img/fundo netflix.jpg");
                background-color: black;
            }
            h1,label{
                font-family: 'Bebas Neue';
                color: white;
            }
            .ola{
               
                background-color: rgba(0, 0, 0, 0.8);
                width: 400px;
                text-align: center;
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
        <div class="container ola">
            <br>
            <h1>Informe seus dados</h1>
            <form action="controller/cadastroController.php" method="POST">
                <input type="hidden" name="id" id="id">
                <label for="nome">Nome</label>
                <input type="nome" class="form-control" id="nome" 
                       placeholder="Insira seu nome" name="nome" >
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" 
                       placeholder="Insira seu email" name="email" >
                
                <label for="senha">Senha</label>
                <input type="password" class="form-control" placeholder="Insira sua senha" name="senha" id="senha">
                
                <input type="submit" value="Cadastrar-se " class="btn btn-success" name="submit" id="submit">
                <br>
            </form>
        </div>
    </body>
</html>
