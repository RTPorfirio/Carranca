<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDao
 *
 * @author Ricardo
 */
include_once 'BD.php';

class UsuarioDao {

    public static function efetuaLogin($email, $senha) {
        $conexao = BD::ConnectBD();
        $login = $conexao->prepare("select * from usuario where email_usuario=:email and senha_usuario=:senha");
        $login->bindValue(":email", $email, PDO::PARAM_STR);
        $login->bindValue(":senha", $senha, PDO::PARAM_STR);
        $login->execute();

        if ($login->rowCount() == 1) {
            $sm = $login->fetch(PDO::FETCH_ASSOC);
            $usuario = self::createUser($sm);
            return $usuario;
        } else {
            $usuario = null;
        }
    }

    public static function listaUsuario($id) {
        $conexao = BD::ConnectBD();
        $login = $conexao->prepare("select * from usuario where id_usuario=:id");
        $login->bindValue(":id", $id, PDO::PARAM_INT);
        $login->execute();
        $sm = $login->fetch(PDO::FETCH_ASSOC);
        $usuario = self::createUser($sm);
        return $usuario;
    }

    public static function alteraUsuario($usuario) {
        $conexao = BD::ConnectBD();
        $edita = $conexao->prepare("update usuario set nome_usuario = :nome, email_usuario = :email, senha_usuario=:senha  where id_usuario=:id");
        $edita->bindValue(":nome", $usuario->getNome_usuario(), PDO::PARAM_STR);
        $edita->bindValue(":email", $usuario->getEmail_usuario(), PDO::PARAM_STR);
        $edita->bindValue(":senha", $usuario->getSenha_usuario(), PDO::PARAM_STR);
        $edita->bindValue(":id", $usuario->GetId_usuario(), PDO::PARAM_INT);
        if ($edita->execute()) {
            return true;
        } else {
            return false;
        }
    }

    private static function createUser($sm) {
        $usuario = new Usuario(
                $sm['id_usuario']
                , $sm['nome_usuario']
                , $sm['email_usuario']
                , $sm['senha_usuario']);
        return $usuario;
    }

}
