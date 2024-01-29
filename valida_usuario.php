<?php
#echo($_POST['email']);
#echo('<br>');
#echo($_POST['senha']);
$usuarios_app=array(
    array('email'=>'admteste@internet.com.br','senha'=>'123456'),
    array('email'=>'fulano@internet.com.br','senha'=>'asdfghjlkln')
);
//variavel para verificar se a autenticação foi realizada
$usuario_autenticado=false;
foreach($usuarios_app as $user){#foreach percorre todo o vetor item por item
    #print_r($user);
    $user['email'];
    $user['senha'];
    #comparando senha de login digitado
    if($user['email']==$_POST['email'] &&
    $user['senha']==$_POST['senha']){
        //echo('log-in feito com sucesso');
        $usuario_autenticado=true;
    }
}
if($usuario_autenticado){
    echo('usuario autenticado');
    header('location:home.php');
}else{
    echo('E-mail ou senha incorretos');
    header('location:index.php?login=erro');
}

?>