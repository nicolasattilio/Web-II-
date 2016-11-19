<?php
/* Smarty version 3.1.30, created on 2016-11-18 12:44:38
  from "/var/www/html/l/templates/partidos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582f21e652d347_12645865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '306e222c68212a50f6edd67c3c676b4e26f6a627' => 
    array (
      0 => '/var/www/html/l/templates/partidos.tpl',
      1 => 1479483814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582f21e652d347_12645865 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container" >
  <form id="formulario" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['partido']->value)) {
echo $_smarty_tpl->tpl_vars['partido']->value['id_partido'];
}?>"><br>
    <label class="label label-default">EQUIPO</label>
    <br><select class="selectpicker show-tick" id="selector_equipo">
        <option value="">Todos</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
        <?php if (isset($_smarty_tpl->tpl_vars['partido']->value) && $_smarty_tpl->tpl_vars['partido']->value["id_local"] == $_smarty_tpl->tpl_vars['team']->value["id"]) {?>
          <option value='<?php echo $_smarty_tpl->tpl_vars['team']->value["id"];?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['team']->value['equipo'];?>
</option>
        <?php } else { ?>
          <option value='<?php echo $_smarty_tpl->tpl_vars['team']->value["id"];?>
'><?php echo $_smarty_tpl->tpl_vars['team']->value['equipo'];?>
</option>
        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select><br>
<table class="table">
  <tr>
    <th>Local</th>
    <th></th>
    <th>Visitante</th>
    <th>Horario de Partido</th>
    <th>Imagenes y comentarios<th>
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
  <td><a class="verImagenesComentarios" href="">Ver mas..</a></td>
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
