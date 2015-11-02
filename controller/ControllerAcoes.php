<?php

include_once '../model/Time.php';
include_once '../model/Jogador.php';
include_once '../model/Conecta.php';
include_once '../dao/JogadorDao.php';
include_once '../dao/TimeDao.php';
session_start();
if ($_SESSION['login'] == "true") {
    $usuario = $_SESSION['usuario'];

    $nome = array();
    $email = array();
    $matricula = array();

    $nome[0] = addslashes(trim($_POST['nomeCapitao']));
    $matricula[0] = addslashes(trim($_POST['matriculaCapitao']));
    $email[0] = addslashes(trim($_POST['emailCapitao']));

    $nome[1] = addslashes(trim($_POST['nomePrimeiroJogador']));
    $matricula[1] = addslashes(trim($_POST['matriculaPrimeiroJogador']));
    $email[1] = addslashes(trim($_POST['emailPrimeiroJogador']));

    $nome[2] = addslashes(trim($_POST['nomeSegundoJogador']));
    $matricula[2] = addslashes(trim($_POST['matriculaSegundoJogador']));
    $email[2] = addslashes(trim($_POST['emailSegundoJogador']));

    $nome[3] = addslashes(trim($_POST['nomeTerceiroJogador']));
    $matricula[3] = addslashes(trim($_POST['matriculaTerceiroJogador']));
    $email[3] = addslashes(trim($_POST['emailTerceiroJogador']));

    if ($_GET['Acao'] == "Inserir") {
        $jogadores = array();
        $nomeEquipe = addslashes(trim($_POST['nomeEquipe']));


        $time = new Time($nomeEquipe);

        for ($i = 0; $i < 4; $i++) {
            $n = $nome[$i];
            $m = $matricula[$i];
            $e = $email[$i];
            if ($i == 0) {
                $jogador = new Jogador($n, $m, $e, 1);
            } else {
                $jogador = new Jogador($n, $m, $e, 0);
            }
            array_push($jogadores, $jogador);
        }

        ConectaDao::insereNovaEquipe($time, $jogadores);
    } else {
        if ($_GET['Acao'] == "Editar") {
            $time = Time::listaTime($_POST['idTime']);
            $time->setNome($_POST['nomeEquipe']);
            Time::alteraTime($time);
            $jogadores = ConectaDao::listaJogadoresTimeEscolhido($_POST['idTime']);
            $i = 0;
            foreach ($jogadores as $sm) {
                $sm->setNome_jogador($nome[$i]);
                $sm->setMatricula_jogador($matricula[$i]);
                $sm->setEmail_jogador($email[$i]);
                $i++;
                Jogador::alteraJogador($sm);
            }
        } else {
            $id = $_GET['idTime'];
            $time = Time::listaTime($id);
            $jogadores = Conecta::listaJogadoresTimeEscolhido($id);
            Time::removeTime($id);
            foreach ($jogadores as $jogador) {
                Jogador::removeJogador($jogador->getId_jogador());
            }
        }
    }
    header("location:../controller/ControllerHome.php");
} else {
    header("location:../index.php?&erro=\"Login\"");
}