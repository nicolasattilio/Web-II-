<?php
/* Smarty version 3.1.30, created on 2016-11-23 20:52:33
  from "C:\xampp\htdocs\Web-II-\db\templates\instalar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5835f381dbb505_10624734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae7839a67ca63083aed9130537e3b0e2714be841' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web-II-\\db\\templates\\instalar.tpl',
      1 => 1479930743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5835f381dbb505_10624734 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instalación de la base de datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body class="blank  pace-done">
<div class="wrapper background">
    <section class="content">
        <div class="container-center lg animated slideInDown">
            <div class="view-header">
                <div class="header-title">
                    <h3>Instale su base de datos</h3>
                </div>
            </div>

            <div class="panel-filled">
                <div class="panel-body">
                    <form class="database" method="post">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Host</label>
                                <input type="name" value="" class="form-control" name="host" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Usuario</label>
                                <input type="name" value="" class="form-control" name="user" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Contraseña</label>
                                <input type="password" value=""class="form-control" name="db-pw">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Nombre base de datos</label>
                                <input type="name" value="" class="form-control" name="dbname" required>
                            </div>
                            <div class="form-group col-lg-12">
                              <div class="checkbox"><label> <input type="checkbox" name="vaciar" value=""> Vaciar base de datos</label></div>
                              <div class="checkbox"><label> <input type="checkbox" name="add" value=""> Agregar datos a la base de datos</label></div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-default">Confirmar</button>
                        </div>
                    </form>
                    <div class="errors"> </div>
                </div>
            </div>

        </div>
    </section>

</div>

<?php echo '<script'; ?>
 src="../js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/ajax.js"><?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
