<?php /* Smarty version 3.1.24, created on 2015-11-02 17:34:55
         compiled from "E:/xampp/htdocs/times/view/registro.html" */ ?>
<?php
/*%%SmartyHeaderCode:26341563790afe85413_76474432%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60644c75dff47bc426f61a7e798d0087e8d518c1' => 
    array (
      0 => 'E:/xampp/htdocs/times/view/registro.html',
      1 => 1446482090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26341563790afe85413_76474432',
  'variables' => 
  array (
    'opc' => 0,
    'acao' => 0,
    'equipe' => 0,
    'jogadores' => 0,
    'idTime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_563790b00ec060_97297865',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563790b00ec060_97297865')) {
function content_563790b00ec060_97297865 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26341563790afe85413_76474432';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Robocode</title>
        <link rel="stylesheet" href="../view/css/bootstrap.min.css">
        <link rel="stylesheet" href="../view/css/style.css">
    </head>
    <body>

        <div class="container-fluid container-style ">
            <div class="col-lg-12" id="menu">
                <ul class="list-inline list-group-item menu">
                    <li>
                        <a href="../controller/ControllerHome.php" class="list-group-item">Equpes Cadastradas</a>
                    </li>
                    <li>
                        <a href="../controller/ControllerCrud.php?&acao=Novo" class="list-group-item">Cadastro de Equpe</a>
                    </li>
                    <li>
                        <a href="../controller/ControllerPerfil.php" class="list-group-item">Meu Perfíl</a>
                    </li>
                    <li>
                        <a href="../controller/ControllerLogout.php" class="list-group-item">Sair</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12 conteudo">
                <form class="form" method="post" action="../controller/ControllerAcoes.php?&Acao=<?php echo $_smarty_tpl->tpl_vars['opc']->value;?>
">
                    <h2><?php echo $_smarty_tpl->tpl_vars['acao']->value;?>
</h2>
                    <table class='table-responsive table-hover table'>
                        <tr>
                            <td height="71" colspan="4"><label >Nome da Equipe</label>
                                <input class="form-control" type="text" id="nomeEquipe" name="nomeEquipe" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?>value="<?php echo $_smarty_tpl->tpl_vars['equipe']->value->getNome();?>
"<?php }?> />
                            </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Nome</td>
                          <td>Matrícula</td>
                          <td>E-Mail</td>
                        </tr>
                        <tr>
                            <td><label >Capitão da Equipe</label></td>
                            <td><input class="form-control" type="text" id="nomeCapitao" name="nomeCapitao" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[0]->getNome_jogador();?>
" <?php }?> ></td>
                            <td><input class="form-control" type="text" id="matriculaCapitao" name="matriculaCapitao" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[0]->getMatricula_jogador();?>
" <?php }?>></td>
                            <td><input class="form-control" type="text" id="emailCapitao" name="emailCapitao" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[0]->getEmail_jogador();?>
" <?php }?>></td>
                        </tr>
                        <tr>
                            <td><label >Primeiro Jogador da Equipe</label></td>
                            <td><input class="form-control" type="text" id="nomePrimeiroJogador" name="nomePrimeiroJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[1]->getNome_jogador();?>
" <?php }?>></td>
                            <td><input class="form-control" type="text" id="matriculaPrimeiroJogador" name="matriculaPrimeiroJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[1]->getMatricula_jogador();?>
" <?php }?>></td>
                            <td><input class="form-control" type="text" id="emailPrimeiroJogador" name="emailPrimeiroJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[1]->getEmail_jogador();?>
" <?php }?>></td>
                        </tr>
                        <tr>
                            <td><label >Segundo Jogador da Equipe</label></td>
                            <td><input class="form-control" type="text" id="nomeSegundoJogador" name="nomeSegundoJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[2]->getNome_jogador();?>
" <?php }?>></td>
                            <td><input class="form-control" type="text" id="matriculaSegundoJogador" name="matriculaSegundoJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[2]->getMatricula_jogador();?>
" <?php }?>></td>
                            <td><input class="form-control" type="text" id="emailSegundoJogador" name="emailSegundoJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[2]->getEmail_jogador();?>
" <?php }?>></td>
                        </tr>
                        <tr>
                            <td><label >Terceiro Jogador da Equipe</label></td>
                            <td><input class="form-control" type="text" id="nomeTerceiroJogador" name="nomeTerceiroJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[3]->getNome_jogador();?>
" <?php }?>></td>
                            <td><input class="form-control" type="text" id="matriculaTerceiroJogador" name="matriculaTerceiroJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[3]->getMatricula_jogador();?>
" <?php }?>></td>
                            <td><input class="form-control" type="text" id="emailTerceiroJogador" name="emailTerceiroJogador" <?php if ($_smarty_tpl->tpl_vars['opc']->value != 'Inserir') {?> value="<?php echo $_smarty_tpl->tpl_vars['jogadores']->value[3]->getEmail_jogador();?>
" <?php }?>></td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="submit" class="btn btn-primary" <?php if ($_smarty_tpl->tpl_vars['opc']->value == 'Inserir') {?>value="Cadastrar Nova Equipe" <?php } else { ?>value="Editar Equipe"<?php }?>></td>
                        </tr>
                    </table><hr>
                    <br/>
                    <input type="hidden" name="idTime" id="idTime" value="<?php echo $_smarty_tpl->tpl_vars['idTime']->value;?>
">;
                </form>
            </div>
        </div> 
    </body>
</html>
<?php }
}
?>