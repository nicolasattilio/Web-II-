<?php
/* Smarty version 3.1.30, created on 2016-11-18 22:20:28
  from "C:\xampp\htdocs\Web-II-\templates\inscripcionPartido.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582f709cad7868_74326393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cbf922aab425b0a583c432205047f93a0dfda92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-II-\\templates\\inscripcionPartido.tpl',
      1 => 1479483239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582f709cad7868_74326393 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="container">
    <form id="formulario" action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['partido']->value)) {
echo $_smarty_tpl->tpl_vars['partido']->value['id_partido'];
}?>"><br>
      <label class="label label-default">Local </label>
      <br><select class="selectpicker show-tick"  name="id_local">
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
      <br><label class="label label-default">Visitante </label>
      <br><select class="selectpicker" name="id_visitante">
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

      </select><br>
      <br><label class="label label-default">Dia</label>
      <div class="well">
        <div id="datetimepicker1" class="input-append date">
          <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
          <span class="add-on">
            <i data-time-icon="icon-time" data-date-icon="icon-calendar">
            </i>
          </span>
        </div>
      </div>
    </form>
  </div>
<div class="container">
    <br>
    <input id="cargarPartido" class="btn btn-success" type="submit" data-partidoid="<?php if (isset($_smarty_tpl->tpl_vars['partido']->value)) {
echo $_smarty_tpl->tpl_vars['partido']->value['id'];
}?>" value="Inscribirse">
  </div>
</div>
<?php }
}
