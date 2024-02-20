<<html>
    <head>
        <title>filmes</title>
    </head>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        body{
            background-color: black;
        }
        img{
            width: 200px;
        }
        .ola{

            display: flex;
            flex-direction: row;
            justify-content: space-around;

        }
        .ola2{
            margin-top: 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;

        }
        .voltar{
            margin-top: 30px;
            font-size: 20px;
            color:white;
           
            border-radius: 10%; margin: 30px;
            padding: 10px;
            font-family: arial;
            font-family: 'Bebas Neue', sans-serif;

        }
        p{
            font-size: 30px;
            color: white;
            margin-left: 100px;
            font-family: 'Bebas Neue', sans-serif;

        }
        .logo{
                 width: 150px;
            }
    </style>
    <body>
        <div class="navbar">
        <img src="img/logo netflix.png " class="logo">
       <a href="home.php" class="voltar">Voltar</a>
        </div>
    </body>
</html>



<?php
@$cod = $_REQUEST['cod'];
if (isset($cod)) {
    //If para o perfil
    if ($cod == '01') {
        //Primeiro array, com 5 imagens
        $result = array(
            './img/mariazinha/it.jpg',
            './img/mariazinha/it-capitulo-2.jpg',
            './img/mariazinha/papa.jpg',
            './img/mariazinha/freira.jpg',
            './img/mariazinha/freira2.jpg',
        );
         echo ('<p>Filmes de Terror</p>');
        echo ('<div class="ola">');
        //Imprime o primeiro array
        foreach ($result as $ola) {
            echo ('<img src="' . $ola . '">');
        }
        echo ('</div>');
        //Segundo array com mais 5 imagens
        $otherresult = array(
            './img/mariazinha/The_Conjuring.jpg',
            './img/mariazinha/invocacao2.jpg',
            './img/mariazinha/invocacao3.jpg',
            './img/mariazinha/anabelle.jpg',
            './img/mariazinha/exorcismo.jpg',
        );
        echo ('<div class="ola2">');
        //imprime o segundo array
        foreach ($otherresult as $ola) {
            echo ('<img src="' . $ola . '">');
        }
        echo ('</div>');
    } // acabou
    if ($cod == '02') {
        $result = array(
            './img/kauezinho/Black.jpg',
            './img/kauezinho/alertavermelho.jpg',
            './img/kauezinho/brazul.jpg',
            './img/kauezinho/ebv.jpg',
            './img/kauezinho/jumanji.jpg',
        );
        echo ('<p>Filmes de Ação</p>');
        echo ('<div class="ola">');
        foreach ($result as $ola) {
            echo ('<img src="' . $ola . '">');
        }
        echo('</div>');
        $otherresult = array(
            './img/kauezinho/matrix.jpg',
            './img/kauezinho/missaoim.jpg',
            './img/kauezinho/topgun.jpg',
            './img/kauezinho/uncharted.jpg',
            './img/kauezinho/vf.jpg',);

        echo ('<div class="ola2">');
        foreach ($otherresult as $ola) {
            echo ('<img src="' . $ola . '">');
        }
        echo ('</div>');
    }
    if ($cod == '03') {
        $result = array(
            './img/infantil/di.jpg',
            './img/infantil/t.png',
            './img/infantil/dm.jpg',
            './img/infantil/e.jpg',
            './img/infantil/f.jpg',
        );
        echo ('<p>Filmes de Infantis</p>');
        echo ('<div class="ola">');
        foreach ($result as $ola) {
            echo ('<img src="' . $ola . '">');
        }
        echo ('</div>');
        $otherresult = array(
            './img/infantil/pn.jpg',
            './img/infantil/s.jpg',
            './img/infantil/ts.jpg',
            './img/infantil/vf.jpg',
            './img/infantil/z.jpg',
        );
        echo ('<div class="ola2">');
        foreach ($otherresult as $ola) {
            echo ('<img src="' . $ola . '">');
        }
        echo ('</div>');
    }
}
?>