<?php /* Smarty version 3.1.24, created on 2015-11-02 06:13:01
         compiled from "E:/xampp/htdocs/times/index.php" */ ?>
<?php
/*%%SmartyHeaderCode:256645636f0ddb51871_19988021%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039315f16dd097070e6a7ade8b5bf4b8f7a01e8b' => 
    array (
      0 => 'E:/xampp/htdocs/times/index.php',
      1 => 1446441156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256645636f0ddb51871_19988021',
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5636f0ddc442c5_18595523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5636f0ddc442c5_18595523')) {
function content_5636f0ddc442c5_18595523 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '256645636f0ddb51871_19988021';
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Robocode - Acesso</title>
        <link rel="stylesheet" href="./view/css/bootstrap.min.css">
        <link rel="stylesheet" href="./view/css/style-login.css">
    </head>
    <body>
        <div class="container-fluid login">

            <div>
                <form class ="form" action="./controller/ControllerLogin.php" method="post">
                    <label><h3>E-Mail</h3></label><br>
                    <input type="email" class="form-control loginInput" required id="email" name="email"/>
                    <label><h3>Senha</h3></label><br>
                    <input type="password" class="form-control loginInput" required id="senha" name="senha"/>
                    <br>    
                    <input type="submit" class=" btn-lg btn-primary btn-block" value="Efetuar Login"><br/>
                    <a href="#">Recuperar Senha</a>
                    <span class=""><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</span>
                </form>
            </div>

        </div>
    </body>
</html> <?php }
}
?>