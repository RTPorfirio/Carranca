<?php

include_once './sm.php';
include_once '../model/Conecta.php';
include_once '../model/Time.php';

session_start();
if ($_SESSION['login'] == "true") {
    $usuario = $_SESSION['usuario'];

    $acao = $_GET['acao'];

    if ($acao == "Novo") {
        $sm->assign("acao", "Nova equipe");
        $sm->assign("opc", "Inserir");
    } else {
        if ($acao == "Editar") {
            $sm->assign("acao", "Edição dos dados da equipe");
            $sm->assign("opc", "Editar");
            $sm->assign("idTime", $_GET['idTime']);
            $sm->assign("jogadores", Conecta::listaJogadoresTimeEscolhido($_GET['idTime']));
            $sm->assign("equipe", Time::listaTime($_GET['idTime']));
        } else {
            $sm->assign("acao", "Remover Equipe");
            $sm->assign("opc", "Remover");
        }
    }

    $sm->display("../view/registro.html");
} else {
    header("location:../index.php?&erro=\"Login\"");
}