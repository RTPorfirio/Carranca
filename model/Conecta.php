<?php

include_once "../dao/ConectaDao.php";

class Conecta {

    private $id_conecta;
    private $conectaTime;
    private $conectaJogador;

    function __construct() {
        
    }

    function getId_conecta() {
        return $this->id_conecta;
    }

    function getConectaTime() {
        return $this->conectaTime;
    }

    function getConectaJogador() {
        return $this->conectaJogador;
    }

    function setId_conecta($id_conecta) {
        $this->id_conecta = $id_conecta;
    }

    function setConectaTime($conectaTime) {
        $this->conectaTime = $conectaTime;
    }

    function setConectaJogador($conectaJogador) {
        $this->conectaJogador = $conectaJogador;
    }

    public static function listaJogadoresTimeEscolhido($id) {
        return ConectaDao::listaJogadoresTimeEscolhido($id);
    }

    public static function insereNovaEquipe($time, $jogadores) {
        return ConectaDao::insereNovaEquipe($time, $jogadores);
    }

}
