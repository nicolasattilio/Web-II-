<?php
class config{
  //----<Home>----
  public static $mode_default = 'index';
  public static $mode = 'mode';
  public static $mode_home = 'home';
  //----<Datos Equipo>-----
  public static $mode_adminEquipos = 'administradorEquipos';
  public static $mode_mostrarFormulario = 'mostrarformulario';
  public static $mode_mostrarEquipos = 'mostrarteams';
  public static $mode_agregarEquipo = 'insertTeam';
  public static $mode_actualizarEquipo = 'updateTeam';
  public static $mode_editarEquipo = 'editTeam';
  public static $mode_borrarEquipo = 'deleteTeam';
  //----<Datos Partido>-----
  public static $mode_updatePartido ='updatePartido';
  public static $mode_editarPartido = 'editarPartido';
  public static $mode_mostrarPartido ='mostrarPartido';
  public static $mode_borrarPartido = 'deletePartidos';
  public static $mode_mostrarInscripcionPartido ='mostrarAgregarPartido';
  public static $mode_agregarPartido = 'insertPartido';
  public static $mode_adminPartidos = 'administradorPartidos';
  //----<Usuarios>----
  public static $mode_ingresar='ingresar';
  public static $mode_salir='salir';
  public static $mode_comentariosEImagenes = 'imagen_coment';
  public static $mode_imagen='imagen';
  public static $mode_registroUsuario='registrousuario';
  public static $mode_nuevoUsuario='nuevoUsuario';
}

?>
