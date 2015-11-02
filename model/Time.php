<?php


include_once "../dao/TimeDao.php";

class Time {

    private $id_time;
    private $nome;
    private $jogadores = [];

    function __construct() {
        if (func_num_args() == 1) {
            $this->nome = func_get_arg(0);
        } else {
            if (func_num_args() == 2) {
                $this->id_time = func_get_arg(0);
                $this->nome = func_get_arg(1);
            }
        }
    }

    function getId_time() {
        return $this->id_time;
    }

    function getNome() {
        return $this->nome;
    }

    function setId_time($id_time) {
        $this->id_time = $id_time;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    function getJogadores() {
        return $this->jogadores;
    }

    function setJogadores($jogadores) {
        $this->jogadores = $jogadores;
    }

        public static function listaTimes() {
        return TimeDao::listaTimes();
    }

    public static function listaTime($id) {
        return TimeDao::listaTime($id);
    }

    public static function insereTime($time) {
        return TimeDao::insereTime($time);
    }

    public static function alteraTime($time) {
        return TimeDao::alteraTime($time);
    }

    public static function removeTime($id) {
        return TimeDao::removeTime($id);
    }

}
