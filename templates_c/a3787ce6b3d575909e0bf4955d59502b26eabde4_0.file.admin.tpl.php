<?php
/* Smarty version 3.1.30, created on 2016-10-21 11:43:56
  from "/var/www/html/webii/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580a29ac908b73_12180207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3787ce6b3d575909e0bf4955d59502b26eabde4' => 
    array (
      0 => '/var/www/html/webii/templates/admin.tpl',
      1 => 1477060884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580a29ac908b73_12180207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<table class="table">
  <tr>
    <th>Equipo</th>
    <th>Arquero</th>
    <th>Defensor</th>
    <th>Defensor</th>
    <th>Atacante</th>
    <th>Atacante</th>
    <th></th>
    <th></th>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['team']->value['equipo'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['team']->value['jugador_1'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['team']->value['jugador_2'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['team']->value['jugador_3'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['team']->value['jugador_4'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['team']->value['jugador_5'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
</td>
    <td><button type="button" class="editTeam btn btn-success"  data-teamid="<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
">Editar</button></td>
    <td><button type="button" class="deleteTeam btn btn-warning" data-teamid="<?php echo $_smarty_tpl->tpl_vars['team']->value['id'];?>
">Eliminar</button></td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<button type="button" class="inscripcion btn btn-primary">Agregar</button>
</div>
<?php }
}
