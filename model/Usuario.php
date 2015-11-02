<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Ricardo
 */
include_once '../dao/UsuarioDao.php';

class Usuario {

    private $id_usuario;
    private $nome_usuario;
    private $email_usuario;
    private $senha_usuario;

    function __construct() {
        if (func_num_args() == 4) {
            $this->id_usuario = func_get_arg(0);
            $this->nome_usuario = func_get_arg(1);
            $this->email_usuario = func_get_arg(2);
            $this->senha_usuario = func_get_arg(3);
        } else {
            $this->nome_usuario = func_get_arg(0);
            $this->email_usuario = func_get_arg(1);
            $this->senha_usuario = func_get_arg(2);
        }
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getNome_usuario() {
        return $this->nome_usuario;
    }

    function getEmail_usuario() {
        return $this->email_usuario;
    }

    function getSenha_usuario() {
        return $this->senha_usuario;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome_usuario($nome_usuario) {
        $this->nome_usuario = $nome_usuario;
    }

    function setEmail_usuario($email_usuario) {
        $this->email_usuario = $email_usuario;
    }

    function setSenha_usuario($senha_usuario) {
        $this->senha_usuario = $senha_usuario;
    }

    public static function alteraUsuario($usuario) {
        return UsuarioDao::alteraUsuario($usuario);
    }

    public static function efetuaLogin($email, $senha) {
        return UsuarioDao::efetuaLogin($email, $senha);
    }

    public static function listaUsuario($id) {
        return UsuarioDao::listaUsuario($id);
    }

}
