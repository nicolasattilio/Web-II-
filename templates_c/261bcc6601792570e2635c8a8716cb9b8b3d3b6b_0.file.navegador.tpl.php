<?php
/* Smarty version 3.1.30, created on 2016-10-27 04:04:43
  from "C:\xampp\htdocs\Web II Nico - copia\templates\navegador.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581160bb000907_85761605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '261bcc6601792570e2635c8a8716cb9b8b3d3b6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web II Nico - copia\\templates\\navegador.tpl',
      1 => 1476743484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581160bb000907_85761605 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagen/pelota 2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Bienvenido a FUTAPP.</h1>
              <p>Para empezar a utilizar nuestros servicios clickee aqui abajo o en el boton inscripcion en el navegador</p>
              <p><a class="btn btn-lg btn-primary inscripcion" href="#" role="button">Inscribite tu equipo ahora</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagen/pelota_futbol.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Queres alentar a tu equipo?</h1>
              <p>Para ver los equipos inscriptos entra aqui y descubre nuevos jugadores!</p>
              <p><a class="btn btn-lg btn-primary equipos" href="#" role="button">Equipos</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="imagen/pelota.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Eres parte del Staff?.</h1>
              <p>Entonces inicia aqui</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Adminstrador</a></p>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      </a>
    </div><!-- /.carousel -->
    </div>
<?php }
}
