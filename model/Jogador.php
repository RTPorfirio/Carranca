<?php

include_once "../dao/JogadorDao.php";
class Jogador {

    private $id_jogador;
    private $nome_jogador;
    private $matricula_jogador;
    private $email_jogador;
    private $capitao;

    function __construct() {
        if (func_num_args() == 4) {
            $this->nome_jogador = func_get_arg(0);
            $this->matricula_jogador = func_get_arg(1);
            $this->email_jogador = func_get_arg(2);
            $this->capitao = func_get_arg(3);
        }
        else{
            $this->id_jogador = func_get_arg(0);
            $this->nome_jogador = func_get_arg(1);
            $this->matricula_jogador = func_get_arg(2);
            $this->email_jogador = func_get_arg(3);
            $this->capitao = func_get_arg(4);
        }
    }
    
    function getId_jogador() {
        return $this->id_jogador;
    }

    function getNome_jogador() {
        return $this->nome_jogador;
    }

    function getMatricula_jogador() {
        return $this->matricula_jogador;
    }

    function getEmail_jogador() {
        return $this->email_jogador;
    }

    function getCapitao() {
        return $this->capitao;
    }

    function setId_jogador($id_jogador) {
        $this->id_jogador = $id_jogador;
    }

    function setNome_jogador($nome_jogador) {
        $this->nome_jogador = $nome_jogador;
    }

    function setMatricula_jogador($matricula_jogador) {
        $this->matricula_jogador = $matricula_jogador;
    }

    function setEmail_jogador($email_jogador) {
        $this->email_jogador = $email_jogador;
    }

    function setCapitao($capitao) {
        $this->capitao = $capitao;
    }

    public static function listaJogadores() {
        return JogadorDao::listaJogadores();
    }

    public static function listaJogador($id) {
        return JogadorDao::listaJogador($id);
    }
    
    public static function insereJogador($jogador) {
        return JogadorDao::insereJogador($jogador);
    }
    
    public static function alteraJogador($jogador) {
        return JogadorDao::alteraJogador($jogador);
    }
    
    public static function removeJogador($id) {
        return JogadorDao::removeJogador($id);
    }

}