<?php
/* Smarty version 3.1.30, created on 2016-10-14 11:52:05
  from "/var/www/html/futbol/templates/equipos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5800f115783ed9_81310504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2ea9a834c88d5d74072be8d384e982548a6ae87' => 
    array (
      0 => '/var/www/html/futbol/templates/equipos.tpl',
      1 => 1476378054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5800f115783ed9_81310504 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <td><img src="..." alt="..." class="img-circle"></td>
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
<?php }
}
