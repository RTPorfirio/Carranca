<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'sm.php';
include_once '../model/Usuario.php';
session_start();
if ($_SESSION['login'] == "true") {
    $usuario = Usuario::listaUsuario($_SESSION['usuario']);
    $sm->assign("usuario",$usuario);
    $sm->display("../view/usuario.html");
} else {
    header("location:../index.php?&erro=\"Login\"");
}

