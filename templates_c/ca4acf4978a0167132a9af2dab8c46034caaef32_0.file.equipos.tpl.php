<?php
/* Smarty version 3.1.30, created on 2016-10-21 11:33:26
  from "/var/www/html/webii/templates/equipos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580a2736994058_91064977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4acf4978a0167132a9af2dab8c46034caaef32' => 
    array (
      0 => '/var/www/html/webii/templates/equipos.tpl',
      1 => 1476743483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580a2736994058_91064977 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
<table class="table">
  <tr>
    <th>Escudo</th>
    <th>Equipo</th>
    <th>Arquero</th>
    <th>Defensor</th>
    <th>Defensor</th>
    <th>Atacante</th>
    <th>Atacante</th>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
  <tr>
    <td><img src="<?php echo $_smarty_tpl->tpl_vars['team']->value['squad'];?>
" class="img-circle" style="width: 40px;"></td>
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
    </td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
</div>
<?php }
}
