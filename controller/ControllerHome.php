<?php

include_once "sm.php";
include_once "../model/Conecta.php";
include_once "../model/Time.php";
include_once '../model/Usuario.php';
session_start();
if ($_SESSION['login'] == "true") {
    $usuario = $_SESSION['usuario'];
    $time = Time::listaTimes();
    if ($time) {
        foreach ($time as $times) {
            $times->setJogadores(Conecta::listaJogadoresTimeEscolhido($times->getId_time()));
        }
        $sm->assign("verifica", "true");
        $sm->assign("time", $time);
    } else {
        $sm->assign("verifica", "false");
    }

    $sm->display("../view/home.html");
}else{
    header("location:../index.php?&erro=\"Login\"");
}