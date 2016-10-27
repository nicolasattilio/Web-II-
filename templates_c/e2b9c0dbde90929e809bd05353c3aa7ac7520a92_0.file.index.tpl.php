<?php
/* Smarty version 3.1.30, created on 2016-10-25 23:15:42
  from "C:\xampp\htdocs\Web II\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580fcb7e538076_50954325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b9c0dbde90929e809bd05353c3aa7ac7520a92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web II\\templates\\index.tpl',
      1 => 1477430058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580fcb7e538076_50954325 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="styles/css/estilo.css">
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <title>FutApp</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                    <span class="sr-only">Menu</span>
                </button>
                <a class="navbar-brand home" href="">FutApp</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar2">
                <ul class="nav navbar-nav navbar-right ">
                    <li><a href="" class="equipos">Equipos</a></li>
                    <li><a href="" class="inscripcion">Inscripcion</a></li>
                    <li><li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administracion <span class="caret"></span>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu4">
                        <li><a href="" class="adminEquipos">Equipos</a></li>
                        <li><a href="" class="adminPartidos">Partidos</a></li>
                      </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid pantalla">
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
