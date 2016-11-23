<?php
/* Smarty version 3.1.30, created on 2016-11-23 23:20:15
  from "C:\xampp\htdocs\Web-II-\templates\imagenesComentarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5836161fb4cf34_40083458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d08395d5e2b8fc1d92b39ff221cb6800f6cdc21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-II-\\templates\\imagenesComentarios.tpl',
      1 => 1479938899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5836161fb4cf34_40083458 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row">
    <form id="cargarImagen" action="" method="POST" enctype="multipart/form-data">
      <input value="<?php echo $_smarty_tpl->tpl_vars['partido']->value['id_partido'];?>
" type="hidden" name="id">
      <label>Imagen</label><input class="form-control" value="" type="file" name="picture[]" multiple></br>
      <input class="btn btn-success" type="submit" value="Agregar">
    </form>
  </div>
  <div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
  <div class="col-xs-6 col-md-3">
    <a href="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['picture'];?>
" class="thumbnail">
      <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['picture'];?>
"/>
    </a>
    <button type="button" class="borrarImagen btn btn-warning" data-imagenid="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
">Borrar Imagen</button></td>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
  <h2>Comentarios:</h2>
  <div class="comentarios row">
  </div>
</div>
<?php }
}
