<?php
/* Smarty version 3.1.30, created on 2016-10-27 04:06:15
  from "C:\xampp\htdocs\Web II Nico - copia\templates\equipos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581161171c0369_12001488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c17dfdea0a9384891465d4113b811bb9ff7fddd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web II Nico - copia\\templates\\equipos.tpl',
      1 => 1477429588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581161171c0369_12001488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" id="pantallaEquipo">
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