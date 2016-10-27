<?php
/* Smarty version 3.1.30, created on 2016-10-27 23:03:45
  from "C:\xampp\htdocs\Web II\templates\inscripciones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58126bb1da48c5_36370702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cdaa4d5d4ca8a7490933eaac452eae66b338a8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web II\\templates\\inscripciones.tpl',
      1 => 1477602093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58126bb1da48c5_36370702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="container">
    <form id="formulario" action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['id'];
}?>">
      <label>Nombre del Equipo: </label><input class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['equipo'];
}?>" type="text" name="equipo">
      <label>Jugador nº1 </label><input class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['jugador_1'];
}?>" type="text" name="jugador_1">
      <label>Jugador nº2 </label><input class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['jugador_2'];
}?>" type="text" name="jugador_2">
      <label>Jugador nº3 </label><input class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['jugador_3'];
}?>" type="text" name="jugador_3">
      <label>Jugador nº4 </label><input class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['jugador_4'];
}?>" type="text" name="jugador_4">
      <label>Jugador nº5 </label><input class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['jugador_5'];
}?>" type="text" name="jugador_5">
      <label>Escudo</label><input class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['squad'];
}?>" type="file" name="escudo"></br>
      <input id="cargarEquipo" class="btn btn-success" type="submit" data-teamid="<?php if (isset($_smarty_tpl->tpl_vars['team']->value)) {
echo $_smarty_tpl->tpl_vars['team']->value['id'];
}?>" value="Inscribirse">
    </form>
  </div>
</div>
<?php }
}
