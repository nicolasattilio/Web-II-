<?php
/* Smarty version 3.1.30, created on 2016-10-14 11:52:00
  from "/var/www/html/futbol/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5800f110854b34_02251419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fb45bf7e1fc3138830911e79339516090f66a4c' => 
    array (
      0 => '/var/www/html/futbol/templates/index.tpl',
      1 => 1476375502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5800f110854b34_02251419 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <title>FutApp</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand home" href="">FutApp</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav navbar-right ">
                    <li>
                        <a href="" class="equipos">Equipos</a>
                    </li>
                    <li>
                        <a href="" class="inscripcion">Inscripcion</a>
                    </li>
                    <li>
                        <a href="" class="admin">Administrador</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container pantalla">
  </div>
  </body>
  <?php echo '<script'; ?>
 src="styles/js/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="styles/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/movimientos.js"> <?php echo '</script'; ?>
>
</html>
<?php }
}
