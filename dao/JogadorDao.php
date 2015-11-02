<?php

include_once "BD.php";
include_once "../model/Jogador.php";

class JogadorDao {

    public static function listaJogadores() {
        $conexao = BD::ConnectBD();
        $busca = $conexao->prepare("select * from jogador");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $jogadores = array();
        foreach ($sm as $jogador) {
            array_push($jogadores, self::inicializaJogador($jogador));
        }
        return $jogadores;
    }
    

    public static function listaJogadoresLimite() {

        $limite = count(self::listaJogadores());
        $conexao = BD::ConnectBD();
        $sql = "select * from jogador limit " . ($limite - 4) . "," . ($limite);
        $busca = $conexao->prepare($sql);
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $jogadores = array();
        foreach ($sm as $jogador) {
            array_push($jogadores, self::inicializaJogador($jogador));
        }
        return $jogadores;
    }

    public static function listaJogador($id) {
        $conexao = BD::ConnectBD();
        $busca = $conexao->prepare("select * from jogador where id_jogador = :id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $jogador = self::inicializaJogador($sm);
        return $jogador;
    }

    public static function insereJogador($jogador) {
        $conexao = BD::ConnectBD();
        $insere = $conexao->prepare("insert into jogador(id_jogador,nome_jogador,matricula_jogador,email_jogador,capitao) values (NULL,:nome,:matricula,:email,:capitao)");
        $insere->bindValue(":nome", $jogador->getNome_jogador(), PDO::PARAM_STR);
        $insere->bindValue(":matricula", $jogador->getMatricula_jogador(), PDO::PARAM_INT);
        $insere->bindValue(":email", $jogador->getEmail_jogador(), PDO::PARAM_STR);
        $insere->bindValue(":capitao", $jogador->getCapitao(), PDO::PARAM_STR);
        if ($insere->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function alteraJogador($jogador) {
        $conexao = BD::ConnectBD();
        $edita = $conexao->prepare("update jogador set nome_jogador = :nome, matricula_jogador =:matricula, email_jogador = :email, capitao=:capitao  where id_jogador=:id");
        $edita->bindValue(":nome", $jogador->getNome_jogador(), PDO::PARAM_STR);
        $edita->bindValue(":matricula", $jogador->getMatricula_jogador(), PDO::PARAM_INT);
        $edita->bindValue(":email", $jogador->getEmail_jogador(), PDO::PARAM_STR);
        $edita->bindValue(":capitao", $jogador->getCapitao(), PDO::PARAM_STR);
        $edita->bindValue(":id", $jogador->GetId_jogador(), PDO::PARAM_INT);
        if ($edita->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function removeJogador($id) {
        $conexao = BD::ConnectBD();
        $edita = $conexao->prepare("delete from jogador where id_jogador = :id");
        $edita->bindValue(":id", $id, PDO::PARAM_INT);
        if ($edita->execute()) {
            return true;
        } else {
            return false;
        }
    }

    protected function inicializaJogador($sm) {
        $jogador = new Jogador(
                $sm['id_jogador']
                , $sm['nome_jogador']
                , $sm['matricula_jogador']
                , $sm['email_jogador']
                , $sm['capitao']);
        return $jogador;
    }

}
