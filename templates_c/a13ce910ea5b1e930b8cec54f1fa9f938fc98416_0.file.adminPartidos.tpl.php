<?php
/* Smarty version 3.1.30, created on 2016-11-21 15:09:18
  from "C:\xampp\htdocs\Web-II-\templates\adminPartidos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5833000e5b20a2_45623349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a13ce910ea5b1e930b8cec54f1fa9f938fc98416' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-II-\\templates\\adminPartidos.tpl',
      1 => 1479250684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5833000e5b20a2_45623349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" >
<table class="table">
  <tr>
    <th>Local</th>
    <th>Visitante</th>
    <th></th>
    <th></th>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['partidos']->value, 'partido');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['partido']->value) {
?>
  <tr>
  <td><?php echo $_smarty_tpl->tpl_vars['partido']->value['local']['equipo'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['partido']->value['visitante']['equipo'];?>
</td>
  <td><button type="button" class="editPartido btn btn-success"  data-partidoid="<?php echo $_smarty_tpl->tpl_vars['partido']->value['id_partido'];?>
">Editar</button></td>
  <td><button type="button" class="deletePartido btn btn-warning" data-partidoid="<?php echo $_smarty_tpl->tpl_vars['partido']->value['id_partido'];?>
">Eliminar</button></td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<button type="button" class="addPartido btn btn-primary">Agregar</button>
</div>
<?php }
}
