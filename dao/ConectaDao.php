<?php

include_once 'BD.php';
include_once 'JogadorDao.php';
include_once 'TimeDao.php';
include_once 'JogadorDao.php';

class ConectaDao extends JogadorDao {

    public static function listaJogadoresTimeEscolhido($id) {
        $conexao = BD::ConnectBD();
        $busca = $conexao->prepare("SELECT jogador.* from conecta_jogador_time INNER JOIN jogador on jogador.id_jogador = conecta_jogador_time.conectaJogador INNER JOIN time on time.id_time = conecta_jogador_time.conectaTime and time.id_time=:id");
        $busca->bindValue(":id", $id, PDO::PARAM_INT);
        $busca->execute();
        $sm = $busca->fetchAll(PDO::FETCH_ASSOC);
        $jogadores = array();
        foreach ($sm as $jogador) {
            array_push($jogadores, self::inicializaJogador($jogador));
        }
        return $jogadores;
    }

    public static function insereNovaEquipe($time, $jogador) {
        $okTime = Time::insereTime($time);
        foreach ($jogador as $jogadores) {
            $okjogadores = Jogador::insereJogador($jogadores);
        }
        if ($okTime && $okjogadores) {
            $conexao = BD::ConnectBD();
            $time = TimeDao::buscaUltimoTime();
            $jogadores = JogadorDao::listaJogadoresLimite();
            foreach ($jogadores as $cadastro) {
                $insere = $conexao->prepare("INSERT INTO conecta_jogador_time (`id_conecta`, `conectaTime`, `conectaJogador`) VALUES (NULL,:idTime,:idJogador)");
                $insere->bindValue(":idTime", $time->getId_time(), PDO::PARAM_INT);
                $insere->bindValue(":idJogador", $cadastro->getId_jogador(), PDO::PARAM_INT);
                $insere->execute();
            }
        }
    }
}
