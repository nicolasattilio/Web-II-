<?php
/* Smarty version 3.1.30, created on 2016-10-26 21:00:44
  from "C:\xampp\htdocs\Web II Nico\templates\inscripcionPartido.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581143ac2cccc4_37354383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82862ec2717d649a94ba037b35fd8298f23cba24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web II Nico\\templates\\inscripcionPartido.tpl',
      1 => 1477526439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581143ac2cccc4_37354383 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="container">
    <form id="formulario" action="" method="POST">
      <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['partido']->value)) {
echo $_smarty_tpl->tpl_vars['partido']->value['id'];
}?>">
      <label>Local </label>

      <select class="" name="id_local">
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

      </select>
      <select class="" name="id_visitante">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['team']->value) {
?>
          <?php if (isset($_smarty_tpl->tpl_vars['partido']->value) && $_smarty_tpl->tpl_vars['partido']->value["id_visitante"] == $_smarty_tpl->tpl_vars['team']->value["id"]) {?>
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

      </select>
    </form>
  </div>
  <div <div class="container">
    <input id="cargarPartido" class="btn btn-success" type="submit" data-partidosid="<?php if (isset($_smarty_tpl->tpl_vars['partidos']->value)) {
echo $_smarty_tpl->tpl_vars['partidos']->value['id'];
}?>" value="Inscribirse">
  </div>
</div>
<?php }
}
