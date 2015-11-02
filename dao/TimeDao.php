<?php

include_once "BD.php";
include_once "../model/Time.php";

class TimeDao {

    public static function listaTimes() {
        $conexao = BD::ConnectBD();
        $busca = $conexao->prepare("select * from time");
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $times = array();
        foreach ($sm as $time) {
            array_push($times, self::inicializaTime($time));
        }
        return $times;
    }

    public static function contaLinhas() {
        $total = self::listaTimes();
        return count($total);
    }

    public static function buscaUltimoTime() {
        $limite = self::contaLinhas();
        $conexao = BD::ConnectBD();
        $sql = "select * from time limit " . ($limite - 1) . "," . ($limite);
        $busca = $conexao->prepare($sql);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $time = self::inicializaTime($sm);
        return $time;
    }

    public static function listaTime($id) {
        $conexao = BD::ConnectBD();
        $busca = $conexao->prepare("select * from time where id_time = :id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetch(PDO::FETCH_ASSOC);
        $time = self::inicializaTime($sm);
        return $time;
    }

    public static function insereTime($time) {
        $conexao = BD::ConnectBD();
        $insere = $conexao->prepare("insert into time(id_time,nome) values (NULL,:nome)");
        $insere->bindValue(":nome", $time->getNome(), PDO::PARAM_STR);
        if ($insere->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function alteraTime($time) {
        $conexao = BD::ConnectBD();
        $edita = $conexao->prepare("update time set nome = :nome where id_time=:id");
        $edita->bindValue(":nome", $time->getNome(), PDO::PARAM_STR);
        $edita->bindValue(":id", $time->GetId_time(), PDO::PARAM_INT);
        if ($edita->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function removeTime($id) {
        $conexao = BD::ConnectBD();
        $edita = $conexao->prepare("delete from time where id_time = :id");
        $edita->bindValue(":id", $id, PDO::PARAM_INT);
        if ($edita->execute()) {
            return true;
        } else {
            return false;
        }
    }

    private function inicializaTime($sm) {
        $time = new Time($sm['id_time'], $sm['nome']);
        return $time;
    }

}
