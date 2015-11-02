<?php /* Smarty version 3.1.24, created on 2015-11-02 07:26:31
         compiled from "E:/xampp/htdocs/times/view/usuario.html" */ ?>
<?php
/*%%SmartyHeaderCode:1042956370217cf9850_02553086%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b00144ce3e512a4fe2e3488ac39c81c9e56189a7' => 
    array (
      0 => 'E:/xampp/htdocs/times/view/usuario.html',
      1 => 1446445589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1042956370217cf9850_02553086',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56370217dca432_90535012',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56370217dca432_90535012')) {
function content_56370217dca432_90535012 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1042956370217cf9850_02553086';
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
                <h2>Alteração dos Dados Cadastrais</h2>
                <form class="form" method="post" action="../controller/ControllerUsuarioAlteracao.php">
                    <table class='table-responsive table-hover table'>
                        <tr>
                            <td><label>Nome</label></td>
                            <td><input type='text' class="form-control" id='nome' name='nome' value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNome_usuario();?>
"/></td>
                        </tr>
                        <tr>
                            <td><label>E-mail</label></td>
                            <td><input type='text' class="form-control" id='email' name='email' value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail_usuario();?>
"/></td>
                        </tr>
                        <tr>
                            <td><label>Senha Atual</label></td>
                            <td><input type='password' class="form-control" id='senhaAtual' name='senhaAtual' value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getSenha_usuario();?>
"/></td>
                        </tr>
                        <tr>
                            <td><label>Nova Senha</label></td>
                            <td><input type='password' class="form-control" id='novaSenha' name='novaSenha'/></td>
                        </tr>
                        <tr>
                            <td><label>Repetir a Senha</label></td>
                            <td><input type='password' class="form-control" id='senhaRepetir' name='senhaRepetir'/></td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="submit" value="Alterar Dados" class="btn btn-primary"></td>
                        </tr>
                    </table>
                </form><br>
            </div>
        </div>
    </body>
</html>
<?php }
}
?>