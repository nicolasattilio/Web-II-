<?php
/* Smarty version 3.1.30, created on 2016-10-27 21:12:59
  from "C:\xampp\htdocs\Web II\templates\navegador.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581251bb724f81_88959542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e45049cf8c06c5860fa50b0579d1198a636cb56c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web II\\templates\\navegador.tpl',
      1 => 1477595504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581251bb724f81_88959542 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h1>Queres ver los partidos?.</h1>
              <p>Entonces has click aqui</p>
              <p><a class="btn btn-lg btn-primary partidos" href="#" role="button">Partidos</a></p>
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
