<?php
/* Smarty version 3.1.30, created on 2016-10-27 04:29:02
  from "C:\xampp\htdocs\Web II Nico - copia\templates\partidos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5811666e3167b3_12366492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c64840091e236940170b70127e018846be024c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web II Nico - copia\\templates\\partidos.tpl',
      1 => 1477535340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5811666e3167b3_12366492 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" >
<table class="table">
  <tr>
    <th>Local</th>
    <th></th>
    <th>Visitante</th>
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
