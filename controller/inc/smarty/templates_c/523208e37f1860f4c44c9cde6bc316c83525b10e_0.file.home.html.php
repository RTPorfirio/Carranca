<?php /* Smarty version 3.1.24, created on 2015-11-02 06:46:25
         compiled from "E:/xampp/htdocs/times/view/home.html" */ ?>
<?php
/*%%SmartyHeaderCode:77705636f8b1186eb0_66939481%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '523208e37f1860f4c44c9cde6bc316c83525b10e' => 
    array (
      0 => 'E:/xampp/htdocs/times/view/home.html',
      1 => 1446442909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77705636f8b1186eb0_66939481',
  'variables' => 
  array (
    'verifica' => 0,
    'time' => 0,
    'times' => 0,
    'jogadores' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5636f8b128fd76_77179380',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5636f8b128fd76_77179380')) {
function content_5636f8b128fd76_77179380 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '77705636f8b1186eb0_66939481';
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

        <div class="container-fluid container-style">
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
                <?php if ($_smarty_tpl->tpl_vars['verifica']->value == "true") {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['time']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['times'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['times']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['times']->value) {
$_smarty_tpl->tpl_vars['times']->_loop = true;
$foreach_times_Sav = $_smarty_tpl->tpl_vars['times'];
?>
                    <div class="times">
                            <h2><?php echo $_smarty_tpl->tpl_vars['times']->value->getNome();?>
</h2>
                            <hr>
                            <ul>
                                <?php
$_from = $_smarty_tpl->tpl_vars['times']->value->getJogadores();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['jogadores'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['jogadores']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['jogadores']->value) {
$_smarty_tpl->tpl_vars['jogadores']->_loop = true;
$foreach_jogadores_Sav = $_smarty_tpl->tpl_vars['jogadores'];
?>
                                    <?php if ($_smarty_tpl->tpl_vars['jogadores']->value->getCapitao() == 1) {?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['jogadores']->value->getNome_jogador();?>

                                        <img src="../view/img/icon_cap.png" alt=""/>
                                        <span class="badge">Capitao da Equipe</span></li>
                                    <?php } else { ?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['jogadores']->value->getNome_jogador();?>
</li>
                                    <?php }?>
                                <?php
$_smarty_tpl->tpl_vars['jogadores'] = $foreach_jogadores_Sav;
}
?>
                            </ul>
                            &nbsp;&nbsp;<a href="../controller/ControllerCrud.php?&acao=Editar&idTime=<?php echo $_smarty_tpl->tpl_vars['times']->value->getId_time();?>
" class="btn btn-success">Editar Equipe</a> || <a href="../controller/ControllerAcoes.php?&Acao=Remover&idTime=<?php echo $_smarty_tpl->tpl_vars['times']->value->getId_time();?>
" class="btn btn-danger">Remover Equipe</a><br>&nbsp;
                        </div><br>
                    <?php
$_smarty_tpl->tpl_vars['times'] = $foreach_times_Sav;
}
?>
                <?php } else { ?>
                    <h2>Nenhum time cadastrado na base de dados!!</h2>
                    <?php }?><br>
            </div>
        </div>


    </body>
</html>
<?php }
}
?>