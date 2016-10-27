<?php
/* Smarty version 3.1.30, created on 2016-10-14 11:52:51
  from "/var/www/html/futbol/templates/admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5800f143294a57_07477459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ae86e91840b19e83a82a5c388c6ed563348b8af' => 
    array (
      0 => '/var/www/html/futbol/templates/admin.tpl',
      1 => 1476377971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5800f143294a57_07477459 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <td><button type="button" class="editTeam btn btn-success" >Editar</button></td>
    <td><button type="button" class="deleteTeam btn btn-warning">Eliminar</button></td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<button type="button" class="insertTeam btn btn-primary">Agregar</button>
<?php }
}
