<?php
/* Smarty version 3.1.30, created on 2016-10-27 23:10:20
  from "C:\xampp\htdocs\Web II\templates\partidos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58126d3c4f9929_26561740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae9068576040beb48236833db9cb53560fe2e27c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web II\\templates\\partidos.tpl',
      1 => 1477602614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58126d3c4f9929_26561740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" >
<table class="table">
  <tr>
    <th>Local</th>
    <th></th>
    <th>Visitante</th>
    <th>Horario de Partido</th>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partidos']->value, 'partido');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partido']->value) {
?>
  <tr>
  <td><?php echo $_smarty_tpl->tpl_vars['partido']->value['local']['equipo'];?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['partido']->value['local']['squad'];?>
" class="img-circle" style="width: 40px;"></td>
  <td>VS</td>
  <td><?php echo $_smarty_tpl->tpl_vars['partido']->value['visitante']['equipo'];?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['partido']->value['visitante']['squad'];?>
" class="img-circle" style="width: 40px;"></td>
  <td><?php echo $_smarty_tpl->tpl_vars['partido']->value['fecha'];?>
PM</td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</div>
<?php }
}
