<?php
/* Smarty version 3.1.30, created on 2016-10-14 12:33:42
  from "/var/www/html/futbol/templates/inscripciones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5800fad6a66956_89039029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '039769c60cbbef18ea9abc24ac64795f8d13bc68' => 
    array (
      0 => '/var/www/html/futbol/templates/inscripciones.tpl',
      1 => 1476457780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5800fad6a66956_89039029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
<form id="formulario" action="" method="POST" enctype="multipart/form-data">
  <label>Nombre del Equipo: </label><input class="form-control" type="text" name="equipo">
  <label>Jugador nº1 </label><input class="form-control" type="text" name="jugador_1">
  <label>Jugador nº2 </label><input class="form-control" type="text" name="jugador_2">
  <label>Jugador nº3 </label><input class="form-control" type="text" name="jugador_3">
  <label>Jugador nº4 </label><input class="form-control" type="text" name="jugador_4">
  <label>Jugador nº5 </label><input class="form-control" type="text" name="jugador_5">
  <label>Escudo</label><input class="form-control" type="file" name="escudo"></br>
  <input id="cargarDatos" class="btn btn-success" type="submit" value="Inscribirse">
</form>
</div>
<?php }
}
