<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        html{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
        div{
            background-color: gainsboro;
            border: 1px solid grey;
            border-radius: 5px;
        }
        .menu{
            background-color: white;
            border: 1px solid grey;
            border-radius: 5px;
            margin:auto;
            text-align:center;
        }
        img{
            width:80px;
            height:80px;
        }
        .imagens{
            width:30%;
            margin:30px 120px;
            padding: 10px;
            display: inline-block;
            border: none;
        }
    </style>
</head>
<body>
    <div>
        <div class="menu">
        <h1>Menu</h1>
        </div>
        
    </div>
    <div>
    <div class="imagens">
        <a href="abrir_chamado.php">
       <center> <img src="formulario_abrir_chamado.png"></a> </center>
    </div>
    <div class="imagens">
        <a href="consultar_chamado.php">
    <center> <img src="formulario_consultar_chamado.png"></a> </center>
    </div>
    </div>
    <div>
<!--incluindo o botao logoff-->
<div class="row mt-5">
        <div class="col-12">
        <a href="index.php" class="btn btn-lg btn-warning btn-block">Sair</a>
        </div>
    </div>
</body>
</html>