<?php

include_once '../model/Usuario.php';
session_start();
if ($_SESSION['login'] == "true") {
    $usuario = Usuario::listaUsuario($_SESSION['usuario']);
    $usuario->setNome_usuario($_POST['nome']);
    $usuario->setEmail_usuario($_POST['email']);
    if(!empty($_POST['novaSenha']))
        $usuario->setSenha_usuario(md5($_POST['novaSenha']));
    else{
        $usuario->setSenha_usuario($_POST['senhaAtual']);
    }

    
    Usuario::alteraUsuario($usuario);
    
    header("location:../controller/ControllerHome.php");
    

}else{
    header("location:../index.php?&erro=\"Login\"");
}
