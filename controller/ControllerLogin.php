<?php

include_once '../model/Usuario.php';
include_once './inc/../sm.php';
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$usuario = Usuario::efetuaLogin($email, $senha);

session_start();
$_SESSION['login'] = "false";
if (!is_null($usuario)) {
    $_SESSION['login'] = "true";
    $_SESSION['usuario'] = $usuario->getId_usuario();
    header("location:ControllerHome.php");
} else
    header("location:../index.php?&erro=\"Falha\"");
