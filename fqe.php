<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './dao/JogadorDao.php';

$jogadores = JogadorDao::listaJogadoresLimite();

foreach ($jogadores as $t){
    echo $t->getNome_jogador()."<br>";
}