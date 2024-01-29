<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Help Desk</title>
    <style>
        html{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .header{
            background-color: black;
            color:white;
        }
        .logo1{
            width:10%;
            height:10%;
            overflow: auto;
        }
        .logo{
            display: inline-block;
            overflow: auto;
            font-size: 32px;
            text-align: center;
        }
        .center{
            margin: auto;
            width: 40%;
            padding: 10px;
        }
        div{
           border-radius: 5px;
           padding: 20px;
           background-color: #f2f2f2;
        }
        input[type=email],select{
            width:100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius:5px;
            box-sizing:border-box;
        }
        input[type=password],select{
            width:100%;
            padding: 12px 20px;
            margin: 8px 0;
            display:inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button{
            width:100%;
            background-color: steelblue;
            color:white;
            padding:16px 32px;
            margin:8px 0;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }
        input{
            width: 70%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #555;
        }
        .text-danger{
            color:red;
        }
    </style>
</head>
<body>
    <div class="header">
      <img src="logo.png" class="logo1">
      <h1 class="logo">Help Desk Turma Técnico em Informática para Internet 2023</h1>
    </div>

    <div>
        <form class="center" action="valida_usuario.php" method="post">
            <legend>Log-in</legend>
            <legend>E-mail</legend>
            <input name="email" type="email" placeholder="E-mail">
            <legend>Senha</legend>
            <input name="senha" type="password" placeholder="Senha">
            <button type="submit">Entrar</button>
            <!--Erro de login-->
            <?php
            if(isset($_GET['login'])){;//testa se a instrucao de entra esta negativa
            ?>
            <div class="text-danger">
                Usuário ou senha inválido(s).
            </div>
            <?php    
            }
            ?>
        </form>
    </div>
</body>
</html>